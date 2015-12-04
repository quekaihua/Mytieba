<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/27
 * Time: 14:25
 */

function dump($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * 返回配置文件信息
 * @param String $key
 * @return mixed
 */
function C($key){
    require '/Conf/config.php';
    return $config[$key];
}

function autoLoad($class){
    $controllerfile = 'libs/Controller/'.$class.'.class.php';
    $modelfile = 'libs/Model/'.$class.'.class.php';
    $viewfile = 'libs/View/'.$class.'.class.php';
    $orgfile = 'libs/ORG/'.$class.'/'.$class.'.class.php';
    $file = 'libs/'.$class.'.class.php';
    if(file_exists($controllerfile)){
        require_once $controllerfile;
    }else if(file_exists($modelfile)){
        require_once $modelfile;
    }else if(file_exists($viewfile)){
        require_once $viewfile;
    }else if(file_exists($orgfile)){
        require_once $orgfile;
    }else if(file_exists($file)){
        require_once $file;
    }
}
spl_autoload_register('autoLoad',false);

/**
 * 返回一个MODEL类
 * @param String $modelName
 */
function D($modelName){
    $modelName = $modelName."Model";
    if(class_exists($modelName)){
        $rc = new ReflectionClass($modelName);
        $model = $rc->newInstance();
        return $model;
    }else{
        throw new Exception('Model does not exists.');
    }
}

/**
 * 返回一个Smaryty实例
 * @return Smarty
 */
function V($dir=''){
    $smarty = new Smarty();
    $smarty->template_dir = C('TEMPLATE_DIR').'/'.$dir;
    $smarty->compile_dir = C('COMPILE_DIR');
    return $smarty;
}