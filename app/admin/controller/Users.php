<?php

/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/17
 * Time: 17:56
 */
include APP.'/'.CUR_MODULE.'/model/usersModel.php';
include PROTECTED_DIR.'/lib/UploadFile.class.php';
class Users
{
    private $smarty;
    private $m;

    function __construct(){
        global $smarty;
        $this->smarty=$smarty;
        $this->m = new usersModel();
    }
    function find($where, $field = '', $order = ''){
        return $this->m->find($where , $field , $order);
    }
    function select($where=1, $field = '', $order = '', $limit = ''){
        return $this->m->select($where, $field , $order, $limit );
    }
    function update($where, $field_arr){
        return $this->m->update($where, $field_arr);
    }
    function insert($data){
        return $this->m->insert($data);
    }
    function delete($where){
        return $this->m->delete($where);
    }
    function useExist($where, $field = '', $order = ''){
        $tmp=array();
        $user = $this->find($where, $field , $order );

        if($user){
            $tmp['code']=200;
            $tmp['msg']='exist';
        }else{
            $tmp['code']=400;
            $tmp['msg']='not exist';
        }
        return json_encode($tmp);
    }
    //个人中心
    function useCerter(){
        $id     = $_GET['id'];
        $user   = $this->find("id='$id'");
        $this->smarty->assign('user',$user);
        $this->smarty->display('users/useAdd.tpl');
    }
    function useModify(){
        $id     ='';
        $insert =arraY();
        $_POST  =array_filter($_POST);
        $username = $_POST['username'];
        if(!isset($_POST['id'])){

            $userinfo=$this->useExist("username='$username'");

            $userinfo=json_decode($userinfo);

            if($userinfo->code==200){
                go('users/useCerter','用户已经存在',2);
                exit;
            }
        }


        $_POST['username']  && $insert['username']  = $_POST['username'];
        $_POST['email']     && $insert['email']     = $_POST['email'];

        $pwd     = isset($_POST['password'])?trim($_POST['password']):'';
        $con_pwd = isset($_POST['confirmPassword'])?trim($_POST['confirmPassword']):'';
        if($pwd!=$con_pwd||($pwd&&!$con_pwd)||(!$pwd&&$con_pwd))
            go('users/useCerter','密码设置不一致',2);
        $pwd && $insert['pwd']=md5($pwd);

        $path=PUBLIC_DIR.'/uploads/images/portrait/';
        $pic=upload($path,'');
        $pic&&$insert['protrait']=$pic;

        if($insert&&isset($_POST['id'])&&$id=$_POST['id']){
            $this->update("id=".$id,$insert);
            $msg='修改成功';
        }else{

            $id=$this->insert($insert);
            $msg='添加成功';
        }

        go('users/useCerter',$msg,2,array('id'=>$id));
    }
    //用户管理——添/删/改：
    function goToAdd(){
        $con='';
        if(isset($_GET['toAction'])&&$_GET['toAction'])
            $con=$_GET['toAction'];

        if($con)
            $this->$con();
        else
            $this->smarty->display('users/useAdd.tpl');
    }
    function goToTel(){
        $id=$_GET['id'];
        $this->delete("id=".$id);
        go('users/goToList','删除成功',2);
    }

    //用户管理——列表：
    function goToList(){
        $list   = $this->select("username<>'admin'");
        $this->smarty->assign('list',$list);
        $this->smarty->display('users/useList.tpl');
    }


}