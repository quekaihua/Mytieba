<?php /* Smarty version 3.1.27, created on 2015-12-03 14:38:24
         compiled from "libs\View\tpl\Index\test.html" */ ?>
<?php
/*%%SmartyHeaderCode:16904565fe360555be9_36074794%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549d7a6fe489580290ebbf9575ca68017b657355' => 
    array (
      0 => 'libs\\View\\tpl\\Index\\test.html',
      1 => 1449124502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16904565fe360555be9_36074794',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565fe3605abaf3_16534683',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565fe3605abaf3_16534683')) {
function content_565fe3605abaf3_16534683 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16904565fe360555be9_36074794';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title> 贴吧云 </title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class=" container col-sm-7 col-sm-offset-3"><br>
    <div class="panel panel-primary ">
        <div class="panel-body"><ol class="breadcrumb"><li><a href="index.php">TiebaCloud</a></li><li class="active">Index</li></ol>
            <?php echo '<?php ';?>echo $info;<?php echo '?>';?>
        </div><p align="center">&copy;2014 <a href="http://tieba.baidu.com/home/main?un=%CF%C0%B5%C1%D0%A1%B7%C9%BB%FA&fr=index" target="_blank">侠盗小飞机</a>,sources on<a href="https://github.com/racaljk" target="_blank" > Github</a></p>

        <div id="status" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">TiebaCloud/Status  - 贴吧云统计(请耐心等待)</h4>
                    </div>

                    <div id="status_content" class="modal-body">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="update" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">TiebaCloud/Update  - 贴吧云账号更新</h4>
                    </div>

                    <div id="status_content" class="modal-body">
                        <p>开发中...</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="feedback" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">TiebaCloud/Update  - 贴吧云意见反馈</h4>
                    </div>

                    <div id="status_content" class="modal-body">
                        <p>请前往<a target ="_blank" href="https://github.com/racaljk/tieba_cloud/issues/new">https://github.com/racaljk/tieba_cloud/issues/new</a>写出你的建议/意见,如果你没有GITHUB账号则需要注册一个.
                            <img src="./public/tutorial.png" class="img-responsive img-thumbnail" alt="Responsive image">
                            或者<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=1948638989@qq.com">给侠盗小飞机发送邮件</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php echo '<script'; ?>
 src="//cdnjscn.b0.upaiyun.com/libs/jquery/2.0.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="javascripts/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="Public/javascripts/index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>