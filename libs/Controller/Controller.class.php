<?php
/**
 * Created by PhpStorm.
 * User: quekaihua
 * Date: 2015/11/27
 * Time: 14:09
 */
class Controller{

    protected $_controller;
    protected $_action;

    public function __construct(){
        $this->_controller = !empty($_GET['controller']) ? $_GET['controller'] : 'Index';
        $this->_action = !empty($_GET['action']) ? $_GET['action'] : 'index';    }

    public function getController(){
        return $this->_controller;
    }

    public function getAction(){
        return $this->_action;
    }

    public function success($msg,$url=''){
        $smarty = V('public');
        $data['title'] = 'Tieba Cloud - Install';
        $data['message'] = $msg;
        $data['url'] = $url;
        $smarty->assign('data',$data);
        $smarty->display('success.html');
    }

    public function error($msg){
        die($msg);
    }

}
