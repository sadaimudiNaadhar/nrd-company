<?php

namespace App\Traits;

trait TransportModeTrait
{

    public function __construct(string $name = null)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return time();
    }

    public function getName()
    {
        return  $this->name;
    }

    public function getType()
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    public function getDepartureDate()
    {
        return $this->departDate;
    }

    public function from()
    {
        return $this->from;
    }

    public function to()
    {
        return $this->to;
    }

    public function setFrom(string $place)
    {
        $this->from = $place;
    }

    public function setTo(string $place)
    {
        $this->to = $place;
    }

    public function setDepartDate(string $departDate)
    {
        $this->departDate = $departDate;
    }

    public function setArrivalDate(string $arrival)
    {
        $this->arrivalDate = $arrival;
    }

    public function setDepartTime(string $departTime)
    {
        $this->departTime = $departTime;
    }

    public function setArrivalTime(string $arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;
    }

    public function getDepartureTime()
    {
        return $this->departTime;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function getFare()
    {
        return $this->fare;
    }

    public function setFare(int $fare)
    {
        $this->fare = $fare;
    }
}
