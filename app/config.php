<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/17
 * Time: 20:33
 */

class config{
    public function ST(){
        /*smarty*/
        global $smarty;
        if(!defined('CUR_MODULE')) define('CUR_MODULE','index');

        $tempdir=APP.'/'.CUR_MODULE;

        $smarty->template_dir   =$tempdir.'/templates/';
        $smarty->compile_dir    =$tempdir.'/templates_c/';
        $smarty->config_dir     =$tempdir.'/configs/';
        $smarty->caching        =false;
        $smarty->cache_dir      =$tempdir.'/cache/';
        $smarty->left_delimiter ='<{';
        $smarty->right_delimiter='}>';
    }
    public   function allowUploadType(){
        $fileType = array(
            'images'    =>  array('jpg','bmp','gif','png',),
            'media'     =>  array('flv','mp4','mp3','wma','swf',),
            'document'  =>  array('ppt','txt','pdf','xls','doc'),
            'pack'      =>  array('7z','zip','rar',),
        );
        return $fileType;
    }
}
