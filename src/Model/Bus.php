<?php 

namespace App\Model;

use App\TransportModeInterface;
use App\Traits\TransportModeTrait;

class Bus implements TransportModeInterface {

    use TransportModeTrait;
}

?>