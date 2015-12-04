<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/3
 * Time: 15:16
 */
class InstallController extends Controller{

    public function index(){
        $smarty = V($this->getController());
        $data['title'] = 'Tieba Cloud - Install';

        $smarty->assign('data',$data);
        $smarty->display('index.html');
    }

    public function install(){
        if(empty($_REQUEST['db_ip'])){
            $this->error('请求安装错误');
        }
        //创建config文件
        $content = '<?php //数据库配置文件'.'
                        $db_conf'." = array(
                    'DB_HOST'          =>  '".$_REQUEST['db_ip']."',
                    'DB_NAME'       =>  '".$_REQUEST['db_name']."',
                    'DB_USER'       =>  '".$_REQUEST['db_username']."',
                    'DB_PASSWORD'   =>  '".$_REQUEST['db_password']."',
                    'DB_PREFIX'     =>  '".$_REQUEST['db_ip']."',
                    'ADMIN_NAME'    =>  '".$_REQUEST['admin_name']."',
                    'ADMIN_PASSWORD'=>  '".$_REQUEST['admin_password']."',
                    );";
        $result = D('File')->createFile('Conf/config.db.php',$content);
        if($result){
            //创建数据库文件
            $mysql = new Mysql();

            if(!$mysql->selectDb(C('DB_NAME'))){
                $mysql->createDb(C('DB_NAME'));  //todo应该判断一下是否创建成功
                $mysql->selectDb(C('DB_NAME'));
            }
            $mysql->query('CREATE TABLE tc_tmp(uid int NOT NULL AUTO_INCREMENT PRIMARY KEY,count int )');
            $mysql->query('CREATE TABLE tc_user(uid int NOT NULL AUTO_INCREMENT PRIMARY KEY,username varchar(15),password varchar(50),cookie varchar(300))');
            $mysql->query('CREATE TABLE tc_baiduinfo(uid int NOT NULL AUTO_INCREMENT PRIMARY KEY,tc_id varchar(15),baidu_id varchar(15),avastar varchar(200))');
            $mysql->query('CREATE TABLE tc_tieba(uid int NOT NULL AUTO_INCREMENT PRIMARY KEY,username varchar(15),fid varchar(15),url varchar(190))');
            $mysql->query('CREATE TABLE tc_conf(uid int NOT NULL AUTO_INCREMENT PRIMARY KEY,setting varchar(15))');
            $mysql->query('set names utf8');
            $mysql->query('INSERT INTO tc_user(uid,username,password) VALUES( 0 ,"'.$_POST['admin_name'].'","'.md5($_POST['admin_password']).'")');
            $mysql->query('INSERT INTO tc_baiduinfo(tc_id) VALUES("'.$_POST['admin_name'].'")');
            $mysql->query('INSERT INTO tc_tmp(count) VALUES(0)');
            $mysql->query('INSERT INTO tc_conf(setting) VALUES("1.5")');

            $this->success('you have succeed to install TiebaCloud,enjoy!',U('User/login'));
        }else{
            $this->error('创建文件失败');
        }
    }
}