<?php
//namespace app\index\controller\index;
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/17
 * Time: 17:56
 */
include APP.'/'.CUR_MODULE.'/model/booksModel.php';

class Index
{
    private $smarty;
    function __construct(){
        global $smarty;
        $this->smarty=$smarty;
    }
    function find($where, $field = '', $order = ''){
        $m = new booksModel();
        return $m->find($where , $field , $order);
    }
    function select($where=1, $field = '', $order = '', $limit = ''){
        $m = new booksModel();
        return $m->select($where, $field , $order, $limit );
    }

    public function index(){
        $book = $this->select();
        $this->smarty->assign('book',$book);
        $this->smarty->display('index.tpl');
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