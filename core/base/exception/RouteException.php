<?php

namespace core\base\exceptions;

class RouteException extends \Exception
{
    static private $_instance;

    static public function getInstance(){
        return self::$_instance;
    }
}