<?php 

namespace App\Model;

use App\Traits\TransportModeTrait;
use App\TransportModeInterface;

class Train implements TransportModeInterface {

  use TransportModeTrait;
}

?>