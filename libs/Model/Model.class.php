<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 15:22
 */
class Model{

    protected $table_pre;
    protected $table;
    protected $mysql;

    public function __construct($modelname){
        $this->table_pre = C('TABLE_PRE');
        $this->table = $this->table_pre.strtolower($modelname);
        $mysql = new Mysql();

    }
}