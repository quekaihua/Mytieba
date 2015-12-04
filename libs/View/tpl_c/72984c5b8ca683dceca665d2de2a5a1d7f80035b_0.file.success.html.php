<?php /* Smarty version 3.1.27, created on 2015-12-03 18:18:32
         compiled from "libs\View\tpl\public\success.html" */ ?>
<?php
/*%%SmartyHeaderCode:25891566016f8bc1e29_50849535%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72984c5b8ca683dceca665d2de2a5a1d7f80035b' => 
    array (
      0 => 'libs\\View\\tpl\\public\\success.html',
      1 => 1449137663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25891566016f8bc1e29_50849535',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566016f8c1fa35_88566979',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566016f8c1fa35_88566979')) {
function content_566016f8c1fa35_88566979 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25891566016f8bc1e29_50849535';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
    <?php echo '<script'; ?>
>
        setTimeout(function(){
            window.location.href='<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
';
        },3000)
    <?php echo '</script'; ?>
>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

    <br/>
    还有3秒跳转，如果不能跳转，点击这里();
</body>
</html><?php }
}
?>