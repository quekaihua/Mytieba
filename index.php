<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 15:23
 */
//require_once './Lib/MyMVC.class.php';
//
//MyMVC::run();

require_once('Function/function.php');

try{
    $main = TinyMVC::getInstance();
    $main->route();
}catch (Exception $e){
    echo $e->getMessage();
}
