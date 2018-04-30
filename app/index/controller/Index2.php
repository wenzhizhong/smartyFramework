<?php
//namespace app\index\controller\index;
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/17
 * Time: 17:56
 */

class Index2
{
    function __construct(){
        
    }

    public function index(){
        global $smarty;
        $book=model('books')->select();
        $smarty->assign('book',$book);
        $smarty->assign('Subject','Subject');

        $smarty->display('side_menu.tpl');
    }
}