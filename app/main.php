<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/17
 * Time: 12:03
 */

class main{
    /*
     * 路由规则
     * 域名?r=m/v/c
    */
    private $url_request='';
    private $param      ='';
    function __construct($url_request = '' , $param = array()){
        $param  && $_GET = $param;
        $url_request && $this->url_request = $url_request;
    }

    function router(){
        $action_    = 'index';
        $controller = 'index';
        $controller_f = APP.'/index/controller/Index.php';
        $url_request  ='';
        if($this->url_request){ $url_request=$this->url_request;}

        if(!$url_request && isset($_GET['r']) && $_GET['r']){
            $url_request=$_GET['r'];
        }else if(!$url_request && isset($_POST['r']) && $_POST['r']){
            $url_request=$_POST['r'];
        }
        $url_request && $route_arr    = explode('/',$url_request);
        isset($route_arr) && $route_arr=array_filter($route_arr);


        if($url_request){
            //模块: m
            if(isset($route_arr[0])&&$route_arr[0]){
                $tempdir=APP.'/'.$route_arr[0];
                if(!is_dir($tempdir)) exit('模块' . $route_arr[0] . '不存在');
                if(!defined('CUR_MODULE'))  define('CUR_MODULE',$route_arr[0]);
                $controller_f = $tempdir.'/controller/Index.php';
            }
            //控制器:
            if(isset($route_arr[1])&&$route_arr[0]){
                $controller_dir = $tempdir.'/controller';
                $controller_f   = $controller_dir.'/'.$route_arr[1].'.php';

                if(!defined('CUR_CONTROLLER')) define('CUR_CONTROLLER',$route_arr[1]);

                if(!file_exists($controller_f)) exit('控制器' . $route_arr[1] . '不存在');

                if(!is_dir($controller_dir)){
                    mkdir($controller_dir);
                    chmod($controller_dir,755);
                }

            }
            //操作:
            if(isset($route_arr[2])){
                $action_        = $route_arr[2];
                $controller     = $route_arr[1];
            }else if(isset($route_arr[1])){
//                $action_    = $route_arr[1];
                $controller = $route_arr[1];
            }
        }else{
            define('CUR_MODULE','index');
        }

        $tmp=array(
            'action'        =>$action_,
            'controller'    =>$controller,
            'controller_f'  =>$controller_f
        );
        //  var_dump($tmp);//die;
        return $tmp;
    }

    public function run(){
       return $this->loadController();
    }
    function loadController($route_arr=array()){
        if(!$route_arr)
            $route_arr= $this->router();

        /*解析路由*/
        $action         = $route_arr['action'];
        $controller     = $route_arr['controller'];
        $controller_f   = $route_arr['controller_f'];
        /*加载配置*/
        require_once APP.'/common.php';
        if(!isset($_SESSION['users'])&&strtolower(CUR_MODULE)=='admin'&&strtolower($controller)!='login') {
            go('Login/index');
        };
        require_once APP.'/config.php';
        $_config=new config();
        $_config->ST();

        /*执行程序*/
        require_once $controller_f;         //引入控制器文件
        $controller_  = new $controller();  //实例化以后
        $controller_  ->$action();          //调用操作方法
        return TRUE;
    }
}