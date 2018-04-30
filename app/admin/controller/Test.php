<?php

/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/4/22
 * Time: 16:56
 */
class Test
{
    private $smarty;

    function __construct(){
        global $smarty;
        $this->smarty=$smarty;
    }
    function formData(){
        $this->smarty->display('test/formData.tpl');
    }
    function uploadBlob(){
        $path=PUBLIC_DIR.'/uploads/files/test/';

        $return=upload($path);
        if($return['code']==200)
            echo json_encode([
                'code'=>200,
                'msg'=>'success',
                'data'=>$return['data']
            ]);
        else
            echo json_encode([
                'code'=>400,
                'msg'=>'error',
                'data'=>''
            ]);
    }
}