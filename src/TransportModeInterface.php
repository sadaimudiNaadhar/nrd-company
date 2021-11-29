<?php 

namespace App;

interface TransportModeInterface {
    // Getters
    public function getId();
    public function getName();
    public function getDepartureDate();
    public function getArrivalDate();
    public function getDepartureTime();
    public function getArrivalTime();
    public function getType();
    public function getFare();
    public function from();
    public function to();

    //Setters
    public function setFrom(string $place);
    public function setTo(string $place);
    public function setDepartDate(string $departDate);
    public function setArrivalDate(string $arrival);
    public function setDepartTime(string $time);
    public function setArrivalTime(string $time);
    public function setFare(int $fare);
}
?>