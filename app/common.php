<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/18
 * Time: 21:16
 */

/*  /////////////  实例化数据模型  ///////////////
 * $model   模型名称
 * return   返回模型实例
 * */

function m($table){
    include_once ROOT.'/protected/model/model.php';
    !isset($m)&&$m=new model($table);
    return $m;
}

///////////////////////     跳转     ////////////////////////////
/* $controller    模块/控制器/操作 (admin/login/index)
 * $param         跳转传递的参数
 * $info          跳转提示信息
 * $sec           跳转延迟
 *
 * */
function go($controller = '',$info='',$sec=0,$param = array()){
    if(!$controller || !is_array($param)) return ;

    $route_arr=explode('/',$controller);
    $nun_route=count($route_arr);

    $cur_model      = defined('CUR_MODULE')?CUR_MODULE:'index';
    $cur_controller = defined('CUR_CONTROLLER')?CUR_CONTROLLER:'index';
    $controller='';
    $file_path='';
    if($nun_route==1){
        $file_path   = APP.'/'.$cur_model.'/controller/'.$cur_controller.'.php';
        $controller .= $cur_model.'/'.$cur_controller.'/'.$route_arr[0];
    }else if($nun_route==2){
        $file_path   = APP.'/'.$cur_model.'/controller/'.$route_arr[0].'.php';
        $controller .= $cur_model.'/'.$route_arr[0].'/'.$route_arr[1];
    }else if($nun_route>=3){
        $file_path   = APP.'/'.$route_arr[0].'/controller/'.$route_arr[1].'.php';
        $controller .= $route_arr[0].'/'.$route_arr[1].'/'.$route_arr[2];
    }

    if(!file_exists($file_path)) exit('操作'.$controller.'不存在');

    if($param){
        foreach ($param as $k=>$v) {
            $controller .="&$k=$v";
        }
    }
    jump('?r='.$controller,$info,$sec);

}/*
 *跳转
 *@param $url 目标地址
 *@param $info 提示信息
 *@param $sec 等待时间
 *return void
*/
function jump($url,$info='',$sec=0)
{
    if(is_null($info)){
        header("Location:$url");
    }else{
        // header("Refersh:$sec;URL=$url");
        echo "<meta http-equiv=\"refresh\" content=".$sec.";URL=".$url.">";
        echo $info;
    }
    die;
}
/////////////////////    调试输出    //////////////////////
function p($param){
    echo '<pre>';
    var_dump($param);
}

/////////////////////    文件上传    //////////////////////

function  uploadObj($savePath='',$maxSize='',$allowExts='',$allowTypes='',$saveRule='')
{

    include ROOT.'/protected/lib/UploadFile.class.php';
    $upload=new UploadFile($savePath,$maxSize,$allowExts,$allowTypes,$saveRule);
    return $upload;
}
/*
 * $path: images/media/document/pack
 * $path: 上传路径
 * $oldpictrue  原图路径
 * */
function upload($path,$oldpicture='',$type='images')
{   
    require_once APP.'/config.php';
    $_config=new config();
    $fileType=$_config->allowUploadType();

    if (!$type)  return array(
        'code'=>400,
        'msg'=>'文件类型不为空',
        'data'=>''
    );
    if(!isset($_FILES)) return '';

    foreach ($_FILES as $k=>$v){

        $p_info=pathinfo($v['name']);

        if(!$v['name']) unset($_FILES[$k]);
        else if(isset($p_info['extension'])&&!in_array($p_info['extension'],$fileType[$type])) return array(
            'code'=>400,
            'msg'=>'文件类型不允许',
            'data'=>''
        );

    }
    if(!$_FILES) return '';


    $tfile=date("Ymd");

    if(!is_dir($path.$tfile)) { mkdir($path.$tfile,777,true);};

    $imgupload= uploadObj($path.$tfile.'/',config('imgupSize'),$fileType[$type]);
    $imgupload->saveRule=time();
    if(!empty($oldpicture)){
        $picpath=$path.$oldpicture;
        if(file_exists($picpath)) @unlink($picpath);
    }
    $imgupload->upload();
    $fileinfo=$imgupload->getUploadFileInfo();
    
//    $errorinfo=$imgupload->getErrorMsg();
//    if(!empty($errorinfo)) alert($errorinfo);

//    $picture=$path.'/'.$tfile.'/'.$fileinfo[0]['savename'];
    $picture = array();
    foreach($fileinfo as $k=>$v){
        $picture[]=$path.'/'.$tfile.'/'.$v['savename'];
    }
    return  array(
        'code'=>200,
        'msg' =>'返回路径数组',
        'data'=>$picture
    );
}

function config($name=NULL, $value=NULL){
    static $config = array();
    $argsNum = func_num_args();
    if( 0 == $argsNum ){
        return $config;
    }else if( 1 == $argsNum ){
        if( is_array($name)){
            foreach($name as $k => $v){
                if( is_array($v) ){
                    isset($config[$k]) or $config[$k] = array();
                    $config[$k] = array_merge($config[$k], $v);
                } else {
                    $config[$k] = $v;
                }
            }
            return $config;
        }else if(isset($config[$name])) {
            return $config[$name];
        } else if(isset($config['APP'][$name])) {
            return $config['APP'][$name];
        } else if(isset($config['DB'][$name])) {
            return $config['DB'][$name];
        } else if(isset($config['TPL'][$name])) {
            return $config['TPL'][$name];
        } else {
            return NULL;
        }
    } else {
        return $config[$name] = is_array($value) ? array_merge($config[$name], $value) : $value;
    }
}

//直接跳转
function redirect( $url, $code=302) {
    header('location:' . $url, true, $code);
    exit;
}
//弹出信息
function alert($msg){
    if (!headers_sent()) header("Content-type: text/html; charset=utf-8");
    echo "<script>alert('$msg');</script>";
}
