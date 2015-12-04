<?php /* Smarty version 3.1.27, created on 2015-12-04 14:06:55
         compiled from "libs\View\tpl\public\success.html" */ ?>
<?php
/*%%SmartyHeaderCode:1917056612d7f0096c0_26797264%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72984c5b8ca683dceca665d2de2a5a1d7f80035b' => 
    array (
      0 => 'libs\\View\\tpl\\public\\success.html',
      1 => 1449209212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1917056612d7f0096c0_26797264',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56612d7f076ce3_29091555',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56612d7f076ce3_29091555')) {
function content_56612d7f076ce3_29091555 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1917056612d7f0096c0_26797264';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
    <?php echo '<script'; ?>
 src="//cdnjscn.b0.upaiyun.com/libs/jquery/2.0.2/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

    <br/>
    还有<span id="time"><?php echo $_smarty_tpl->tpl_vars['data']->value['timeout'];?>
</span>秒跳转，如果不能跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
">点击这里</a>;

    <?php echo '<script'; ?>
>
        setTimeout(function(){
            window.location.href='<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
';
        },<?php echo $_smarty_tpl->tpl_vars['data']->value['timeout']*1000;?>
);

        var num = 0;
        function numCount(number){
            num = number;
            console.log(num);
            var obj = document.getElementById('time');
            obj.innerText = num;
            num--;
            setTimeout("numCount(num)",1000);
        }
        numCount(<?php echo $_smarty_tpl->tpl_vars['data']->value['timeout'];?>
);
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>