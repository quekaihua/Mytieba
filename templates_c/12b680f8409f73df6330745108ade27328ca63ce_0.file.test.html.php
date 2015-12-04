<?php /* Smarty version 3.1.27, created on 2015-12-03 10:08:17
         compiled from "libs\View\tpl\test.html" */ ?>
<?php
/*%%SmartyHeaderCode:13421565fa4114dffa0_41903884%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12b680f8409f73df6330745108ade27328ca63ce' => 
    array (
      0 => 'libs\\View\\tpl\\test.html',
      1 => 1449108495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13421565fa4114dffa0_41903884',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565fa41151e7b4_14825499',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565fa41151e7b4_14825499')) {
function content_565fa41151e7b4_14825499 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13421565fa4114dffa0_41903884';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>hello,kitty</title>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
开始我的MVC！！！
</body>
</html><?php }
}
?>