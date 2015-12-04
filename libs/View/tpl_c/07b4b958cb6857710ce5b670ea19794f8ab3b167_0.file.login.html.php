<?php /* Smarty version 3.1.27, created on 2015-12-04 15:28:53
         compiled from "libs\View\tpl\User\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:6997566140b582bf65_24897384%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07b4b958cb6857710ce5b670ea19794f8ab3b167' => 
    array (
      0 => 'libs\\View\\tpl\\User\\login.html',
      1 => 1449214132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6997566140b582bf65_24897384',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566140b58762f1_17855392',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566140b58762f1_17855392')) {
function content_566140b58762f1_17855392 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6997566140b582bf65_24897384';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Public/css/font-awesome.min.css">
</head>
<body>
<div class=" container col-sm-6 col-sm-offset-3"><br>
    <div class="panel panel-primary ">
        <div class="panel-body">
            <ol class="breadcrumb">
                <li><a href="index.php">TiebaCloud</a></li>
                <li class="active">Login</li>
            </ol>
            <form class="form  center-block" method="post"action="<?php echo U('User/dologin');?>
">
                <div class="form-group">
                    <input name="log_username" class="form-control input-lg" placeholder="用户名">
                </div>
                <div class="form-group">
                    <input name="log_password" type="password" class="form-control input-lg" placeholder="密码">
                </div>
                <div class="form-group">
                    <button name="log" class="btn btn-primary btn-lg btn-block"><i class="icon-off"></i>登陆</button>
                    <a class=" pull-right" href="register.php"><i class="icon-user"></i>没有账号?</a>
                </div>
            </form>
        </div>
        <p align="center">&copy;2015 <a href="#" target="_blank">小悟空</a>,sources on <a href="https://github.com/quekaihua" target="_blank" >Github</a></p>
    </div>
    <?php echo '<script'; ?>
 src="//cdnjscn.b0.upaiyun.com/libs/jquery/2.0.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="Public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body><?php }
}
?>