<?php
//namespace app\index\controller\Login;
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/17
 * Time: 17:56
 */
include APP.'/'.CUR_MODULE.'/model/usersModel.php';

class Login
{
    private $smarty;
    function __construct(){
        global $smarty;
        $this->smarty=$smarty;
    }
    function index(){
        $this->smarty->assign('Login','Login');
        $this->smarty->display('login/login.tpl');
    }

    public function dologin(){
        $msg      = '登陆失败,';
        $flag     = false;
        $err_msg  ='';
        $username = htmlspecialchars(trim($_POST['username']));
        $pwd      = htmlspecialchars(trim($_POST['pwd']));
        if(!$username||!$pwd) go('index','登陆失败，用户名或密码为空',2);

        $m = new usersModel();
        $users  = $m->find("username='$username'");

        if($users['pwd']==md5($pwd)){
            $_SESSION['users']=$users;
            $flag=true;
        }
        else{
            $err_msg = '用户名或密码错误，';
            if(!$users) $err_msg = '用户名错误，';
            elseif ($users['pwd']!=md5($pwd))  $err_msg = '密码错误，';
        }


        if($flag) $msg='登陆成功,';
        go('index/index',$msg.$err_msg.'正在跳转',2);
    }
    function loginout(){
        unset($_SESSION['users']);
        if(!isset($_SESSION['users']))
            go('index','退出成功',2);
    }
}