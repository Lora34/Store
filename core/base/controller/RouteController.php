<?php

namespace core\base\controller;

use core\base\settings\Settings;
use core\base\settings\ShopSettings;

class RouteControllers
{
    static private $_instance;

    protected $routes;

    protected $controller;
    protected $inputMethod;
    protected $outputMethod;
    protected $parameters;

    static public function getInstance(){
        if(self::$_instance instanceof self){
             return self::$_instance;
        }

        return self::$_instance = new self;
    }

    private function __clone() {

    }

    private function __construct() {
       /*  $s = Settings::get("routes");
        $s1 = ShopSettings::get('property1'); */

        $adress_str = $_SERVER['REQUEST_URI'];

        if(strrpos($adress_str, '/') === strlen($adress_str) - 1 && strrpos($adress_str, '/') !== 0) {
            $this->redirect(rtrim($adress_str, '/'), 301);
        }

        $path = substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], 'index.php'));
        if($path === PATH) {

            $this->routes = $settings::get('routes');
            
        }else{
            try{
                throw new \Exception('Не корректная директория сайта')
            }
            catch(\Exception $e){
                exit($e->getMesagge());
            }
        }
        

        exit();
    }
}