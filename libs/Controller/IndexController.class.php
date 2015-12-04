<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 16:40
 */
class IndexController extends Controller{

    public function index(){
        $smarty = V($this->getController());
        $data['title'] = '贴吧云';
        $smarty->assign('data',$data);
        $smarty->display('index.html');
    }
}