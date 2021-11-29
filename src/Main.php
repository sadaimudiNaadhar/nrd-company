<?php

namespace App;

use App\Model\Bus;
use App\Model\Flight;
use App\Model\Ship;
use App\Model\Train;
use App\Model\TransportMode;

class Main
{


   public function execute()
   {

      //  return View::render('create.php');

      if (!empty($_POST['doAction'])) {

         switch ($_POST['doAction']) {
            case "create-connection": {
                  $this->createTicket();
               }
               break;

            case "create-contract": {

                  $tmode = new TransportMode();
                  $tmode->createContract();
               }
               break;

            case "store-client-sum": {

                  $tmode = new TransportMode();
                  $tmode->storeClientAggregate();
               }
               break;

            case "update-ticket": {

                  $tmode = new TransportMode();
                  $tmode->updateTicket();
               }
               break;
         }
      }

      switch ($_GET['doAction'] ?? null) {

         case "get-union-journey-set": {

               $tmode = new TransportMode();
               echo "<pre>";
               print_r($tmode->getUnionAll());
               exit;

               return View::render('all-tickets.php');
            }

         case "create-connection":
            return View::render('create-connection.php');
         case "get-ticket":

            $tmode = new TransportMode();
            echo "<pre>";
            print_r($tmode->getTicketDetails($_GET["t_id"]));
            exit;

         case "create-contract-view":

            $tmode = new TransportMode();

            $data = [
               'flights' => $tmode->getTickets(new Flight()),
               'trains' =>  $tmode->getTickets(new Ship()),
               'buses' =>  $tmode->getTickets(new Bus()),
               'ships' =>  $tmode->getTickets(new Ship()),
            ];

            return View::render('create-contract-view.php', $data);

         case "client-contract-view":

            return View::render('client-view.php');

         default:
            return View::render('index.php');
      }
   }

   private function createTicket()
   {

      $mode = $_POST['mode'];

      if ($mode == 1) {
         $modeObj = new Flight($_POST['t_name']);
      } elseif ($mode == 2) {
         $modeObj = new Train($_POST['t_name']);
      } elseif ($mode == 3) {
         $modeObj = new Bus($_POST['t_name']);
      } elseif ($mode == 4) {
         $modeObj = new Ship($_POST['t_name']);
      }

      $modeObj->setFrom($_POST['from']);
      $modeObj->setTo($_POST['to']);
      $modeObj->setDepartDate($_POST['depart_date']);
      $modeObj->setDepartTime($_POST['depart_time']);
      $modeObj->setArrivalDate($_POST['arrival_date']);
      $modeObj->setArrivalTime($_POST['arr_time']);
      $modeObj->setFare($_POST['fare']);
      $tmode = new TransportMode($modeObj);

      return $tmode->add();
   }
}
