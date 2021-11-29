<?php

namespace App\Model;

use App\TransportModeInterface;
use Exception;

class TransportMode extends RedisConn
{
    private $modeOfTransport;

    public function __construct(TransportModeInterface $modeOfTransport = null)
    {
        $this->modeOfTransport = $modeOfTransport;

        parent::__construct();
    }

    public function add()
    {

        $data = [
            "id" =>  $this->getUniqueID(),
            "type" => $this->modeOfTransport->getType(),
            "name" =>  $this->modeOfTransport->getName(),
            "departure" =>  $this->modeOfTransport->from(),
            "arrival" =>  $this->modeOfTransport->to(),
            "arrival_date" =>  $this->modeOfTransport->getArrivalDate(),
            "departure_date" =>  $this->modeOfTransport->getDepartureDate(),
            "arrival_time" =>  $this->modeOfTransport->getArrivalTime(),
            "departure_time" =>  $this->modeOfTransport->getDepartureTime(),
            "fare" =>  $this->modeOfTransport->getFare(),
        ];

        try {

            $this->redis->sAdd($this->modeOfTransport->getType(),  $data['id']);

            return $this->redis->hMSet($data['id'],  $data);
        } catch (Exception $e) {
            print_r($e);
            exit();
        }
    }

    private function getUniqueID()
    {
        $name = $this->modeOfTransport->getId() . '-' . substr($this->modeOfTransport->from(), 0, 3) . "-" . substr($this->modeOfTransport->to(), 0, 3);

        return strtoupper($name);
    }

    public function getUnionAll()
    {
        try {

            return $this->redis->sUnion(
                (new Flight())->getType(),
                (new Train())->getType(),
                (new Ship())->getType(),
                (new Bus())->getType(),
            );
        } catch (Exception $e) {
            print_r($e);
            exit();
        }
    }

    public function getTicketDetails($id)
    {
        try {

            return $this->redis->hGetAll($id);
        } catch (Exception $e) {
            print_r($e);
            exit();
        }
    }

    public function getTickets(TransportModeInterface $transportType)
    {
        $ticket = [];

        $data = $this->redis->sMembers($transportType->getType());

        foreach ($data as $ticket_id) {
            $ticket[] = $this->getTicketDetails($ticket_id);
        }

        return $ticket;
    }

    public function createContract()
    {

        foreach ($_POST['selected_tickets'] ?? [] as $id) {
            $ticket = $this->getTicketDetails($id);

            $this->redis->zAdd($_POST['client_name'], strtotime($ticket['arrival_date']),  $id);
        }
    }

    public function storeClientAggregate()
    {

        $data = $this->redis->zRevRange($_POST['client_name'], 0, -1);

        $sum  = 0;

        foreach ($data ?? [] as $id) {
            $ticket = $this->getTicketDetails($id);

            $sum = $sum + (float) $ticket['fare'];
        }

        $this->redis->sAdd($_POST['client_name'] . "_SUM",  $sum);
    }


    public function updateTicket()
    {
        // $this->redis->zRevRange($_POST['client_name'], 0, -1);
    }
}
