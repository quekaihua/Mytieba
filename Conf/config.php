<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 14:29
 */
require 'config.db.php';
require 'config.web.php';
$config = $web_conf;
if(isset($db_conf) && isset($web_conf)){
    $config = array_merge($db_conf,$web_conf);
}
