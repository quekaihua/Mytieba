<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/3
 * Time: 16:10
 */
class FileModel extends Model{

    public function createFile($file,$content){
        $fp = fopen($file, 'w');
        if(!$fp){
            return false;
        }else{
            fwrite($fp,$content);
            fclose($fp);
            return true;
        }
    }
}