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

    /**
     * 成功跳转模板
     * @param $msg  提示信息
     * @param string $url  成功后跳转地址  example ?controller=install&action=index
     * @param int $timeout 时间以秒为单位
     */
    public function success($msg,$url='',$timeout=5){
        $smarty = V('public');
        $data['title'] = 'Tieba Cloud - Success';
        $data['message'] = $msg;
        $data['url'] = !empty($url) ? $url : "?controller={$this->getController()}&action={$this->getAction()}";
        $data['timeout'] = $timeout;
        $smarty->assign('data',$data);
        $smarty->display('success.html');
    }

    public function error($msg,$url='',$timeout=5){
        $smarty = V('public');
        $data['title'] = 'Tieba Cloud - Error';
        $data['message'] = $msg;
        $data['url'] = !empty($url) ? $url : "?controller={$this->getController()}&action={$this->getAction()}";
        $data['timeout'] = $timeout;
        $smarty->assign('data',$data);
        $smarty->display('success.html');
    }

}
