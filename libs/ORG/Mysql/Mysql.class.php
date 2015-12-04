<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 14:13
 */
//Model 类
class Mysql{

    private $_link;

    public function __construct(){
        if(!($this->_link = mysql_connect(C('DB_HOST'),C('DB_USER'),C('DB_PASSWORD'))))
            $this->err();
    }

    public function selectDb($dbname){
        $result = mysql_select_db($dbname,$this->_link);
        if(!$result){
            return false;
        }else{
            return true;
        }
    }

    public function createDb($dbname){
        $result = $this->query('CREATE DATABASE '.$dbname.' default charset utf8');
        if(!$result){
            return false;
        }else{
            return true;
        }
    }

    /**
     * 执行一条查询
     * @param $sql
     * @return array|mixed
     */
    public function query($sql){
        $sql = mysql_real_escape_string($sql);
        $result = mysql_query($sql);
        return $result;
    }

//    public function getLastSql(){
//        return
//    }

    public function __destruct(){
        mysql_close($this->_link);
    }

    public function err(){
        die('数据库操作出错'.mysql_error());
    }
}