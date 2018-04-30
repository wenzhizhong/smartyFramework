<?php

/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/4/22
 * Time: 14:10
 */
class Common
{
    public function uploadImg(){
        $path=PUBLIC_DIR.'/uploads/images/portrait/';
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