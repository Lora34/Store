<?php 

use core\base\exceptions\RouteException;
use core\base\controllers\RouteController;
try{
    
    RouteController::getInstance()->route();
}

catch (RouteException $e) {
    exit($e->getMessage());
}

