<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/4
 * Time: 14:42
 */
class UserController extends Controller{

    public function login(){
        $smarty = V($this->getController());
        $data['title'] = 'Tieba Cloud - Login';
        $smarty->assign('data',$data);
        $smarty->display('login.html');
    }

    public function dologin(){
        $username = $_POST['log_username'];
        $password = $_POST['log_password'];
        if(empty($username) || empty($password)){
            $this->error('用户名或密码不能为空。',U('User/login'));
        }
        $model = D('User');
        $model->login();
    }
}