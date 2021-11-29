<?php 

// Autoloading classes
require 'vendor/autoload.php';

use App\Main;

define('BASE_PATH', __DIR__);

// Bootstrapping
(new Main)->execute();
?>