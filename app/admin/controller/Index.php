<?php
//namespace app\index\controller\index;
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/17
 * Time: 17:56
 */

class Index
{
    private $smarty;
    function __construct(){
        global $smarty;
        $this->smarty=$smarty;
    }

    public function index(){
//        $testconf=$this->smarty->configLoad('test.conf')->config_vars;//获取变量  法1
//        $testconf=$this->smarty->configLoad('test.conf')->getConfigVars();//获取变量  法2
//        $book = model('books')->select();
//        $this->smarty -> assign('book',$book);
        if(isset($_GET['sysIntro'])){
            p($_POST);die;
        }
//die;
        $this->smarty -> display('index.tpl');
    }
    public function ajaxtest(){

        $res=array(
            'code'=>200,
            'msg'=>'hello world!',
            'data'=>array('a','b','c'),
        );
        echo json_encode($res);
    }
}