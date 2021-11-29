<?php 

namespace App\Model;

use App\Traits\TransportModeTrait;
use App\TransportModeInterface;

class Ship implements TransportModeInterface {

    use TransportModeTrait;
}
