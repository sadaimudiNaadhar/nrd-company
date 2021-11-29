<?php 

namespace App\Model;

use App\TransportModeInterface;
use App\Traits\TransportModeTrait;

class Flight implements TransportModeInterface {

  use TransportModeTrait;
}
