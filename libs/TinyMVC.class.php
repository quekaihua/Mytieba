<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/2
 * Time: 14:56
 */
class TinyMVC{
    protected $_controller;
    protected $_action;
    protected $_params;
    static $_instance;

    public static function getInstance(){
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct(){
        $this->_controller = !empty($_GET['controller']) ? $_GET['controller'] : 'Index';
        $this->_action = !empty($_GET['action']) ? $_GET['action'] : 'index';
    }

    public function route(){
        if(class_exists($this->getController())){
            $rc = new ReflectionClass($this->getController());
            if($rc->hasMethod($this->getAction())){
                $controller = $rc->newInstance();
                $method = $rc->getMethod($this->getAction());
                $method->invoke($controller);
            }else{
                throw new Exception('Action not exists');
            }
        }else{
            throw new Exception('Controller not exists');
        }
    }

    public function getController(){
        return $this->_controller."Controller";
    }

    public function getAction(){
        return $this->_action;
    }
}