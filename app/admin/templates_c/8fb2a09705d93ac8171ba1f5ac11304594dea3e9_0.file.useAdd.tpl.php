<?php
/* Smarty version 3.1.30, created on 2018-04-22 18:29:57
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\templates\users\useAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adc6425bbb0e9_70204622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fb2a09705d93ac8171ba1f5ac11304594dea3e9' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\templates\\users\\useAdd.tpl',
      1 => 1524392991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout_top.tpl' => 1,
    'file:layout_left.tpl' => 1,
  ),
),false)) {
function content_5adc6425bbb0e9_70204622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "Customer", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style type="text/css">
    html ,body{
        height:100%;
        overflow: hidden;
    }

    .imageBox{
        width:100%;
        min-height: 460px;

        position: relative;

        overflow: hidden;
        cursor: move;
    }
    .imageBox .thumbBox {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200px;
        height: 200px;
        margin-top: -100px;
        margin-left: -100px;
        box-sizing: border-box;
        border: 1px solid rgb(102, 102, 102);
        box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
        background: none repeat scroll 0% 0% transparent;
    }
    #defaultForm .action{
        margin-top: 20px;
    }
    #defaultForm .action input  {
        color: #fff;
        padding: 10px 20px;
        border:none;
        border-radius: 5px;
    }
    #localImag{
        height:100px;
        border:dashed 1px #ccc;
    }
    #portrait{
        width:100%;
        height: 100%;
        overflow: hidden;
        opacity: 0;
        position: absolute;
        top:0;
        left:0;
        bottom:0;
        right:0;
        cursor: pointer;
    }
</style>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title glyphicon glyphicon-user">用户编辑</h3>
    </div>

    <div class="panel-body">
        <form id="defaultForm" method="post" name="defaultForm" class="form-horizontal" action="?r=admin/users/useModify"   role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username" class="col-sm-1 control-label">用户名:</label>
                <div class="col-sm-9">
                    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['user']->value['username'])===null||$tmp==='' ? FALSE : $tmp)) {?>  <!--smarty-->
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" name="id" >
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" class="form-control" name="username" id="username" placeholder="用户名" />
                    <?php } else { ?>
                        <input type="text" value="" class="form-control" name="username" id="username" placeholder="用户名" />
                    <?php }?>
                </div>
            </div>

            <div class="form-group"  >
                <label for="email" class="col-sm-1 control-label">邮&nbsp;&nbsp;&nbsp;&nbsp;箱:</label>
                <div class="col-sm-9">
                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value['email'])) {?>
                        <input type="text" class="form-control" name="email" id="email" placeholder="邮箱" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"/>
                    <?php } else { ?>
                        <input type="text" class="form-control" name="email" id="email" placeholder="邮箱" value=""/>
                    <?php }?>

                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-1 control-label">密&nbsp;&nbsp;&nbsp;&nbsp;码:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" id="password" placeholder="密码" />
                </div>
            </div>

            <div class="form-group">
                <label for="confirmPassword" class="col-sm-1 control-label">确认密码:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="确认密码" />
                </div>
            </div>
            <div class="form-group">
                <label for="portrait" class="col-sm-1 control-label">头&nbsp;&nbsp;&nbsp;&nbsp;像:</label>

                <div class="col-sm-7">
                    <div class="imageBox" style="background-image: url(<?php if (isset($_smarty_tpl->tpl_vars['user']->value['protrait'])) {
echo $_smarty_tpl->tpl_vars['user']->value['protrait'];
} else { ?> <?php echo ROOT;
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'protrait');
}?>); background-size: 400px 460px; background-position: 25px -9px; background-repeat: no-repeat;">
                        <div class="thumbBox"></div>
                        <div class="spinner" style="display: none;">Loading...</div>
                    </div>
                    <div class="action">
                        <!-- <input type="file" id="file" style=" width: 200px">-->
                        <!--<div class="new-contentarea tc"> <a href="javascript:void(0)" class="upload-img">
                                <label for="upload-file">上传图像</label>
                            </a>
                            <input type="file" class="" name="upload-file" id="upload-file">

                        </div>-->
                        <input type="button" id="btnCrop" class="Btnsty_peyton btn-primary" value="裁切">
                        <input type="button" id="btnZoomIn" class="Btnsty_peyton btn-primary" value="+">
                        <input type="button" id="btnZoomOut" class="Btnsty_peyton btn-primary" value="-">
                        <input type="button" id="j-upload" class="Btnsty_peyton btn-warning" value="上传">
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="cropped" style="text-align: center  ">
                        <img src="" align="absmiddle" style="width:64px;margin-top:4px;border-radius:64px;box-shadow:0px 0px 12px #7E7E7E;"><p>64px*64px</p>
                        <img src="" align="absmiddle" style="width:128px;margin-top:4px;border-radius:128px;box-shadow:0px 0px 12px #7E7E7E;"><p>128px*128px</p>
                        <img src="" align="absmiddle" style="width:180px;margin-top:4px;border-radius:180px;box-shadow:0px 0px 12px #7E7E7E;"><p>180px*180px</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="portrait" class="col-sm-1 control-label"></label>
                <div class="col-sm-7 portrait_upload">
                    <div style="position: relative; " id="localImag" >
                        <input type="file"  name="protrait" id="portrait" placeholder="头像" accept="image/*" />
                        点击此处/拖拽图片到此处上传
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label for="submit" class="col-sm-1 control-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>

            </div>
        </form>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:layout_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo ROOT;?>
public/static/js/myUpload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo ROOT;?>
public/static/js/cropbox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
  type="text/javascript">


    var preview_src="<?php if (isset($_smarty_tpl->tpl_vars['user']->value['protrait'])) {
echo $_smarty_tpl->tpl_vars['user']->value['protrait'];
} else { ?> <?php echo ROOT;
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'protrait');
}?>";
    $(document).ready(function() {
        /*表单验证*/
//        $flag=checkPwd();
        var fieldsArr={
            username: {
                message: '用户名无效',
                        validators: {
                    notEmpty: {
                        message: '用户名不为空'
                    },
                    stringLength: {
                        min: 5,
                                max: 30,
                                message: '用户名长度在5~30个字符之间'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: '用户名只能由字母、数字、点和下划线组成'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: '邮箱不为空'
                    },
                    emailAddress: {
                        message: 'email无效'
                    }
                }
            },
            password:{
                validators: {
                    notEmpty: {
                        message: '密码不为空'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: '密码不一致'
                    }
                }
            },
            confirmPassword:{
                validators: {
                    notEmpty: {
    //                        message: '确认密码不为空'
                    },
                    identical: {
                        field: 'password',
                        message: '密码不一致'
                    }
                }
            }

        };

        var valitate_class={
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        };
        var $id=$('input[name="id"]');

        if($id.length){
            delete fieldsArr.password;
            delete fieldsArr.confirmPassword;
            $con_pwd=null;
            $pwd    =null;
            $('input[type="password"]').on("input",function(){   //动态修改验证规则
                var btn        = $('button[type="submit"]')
                var $con_pwd   = $("#confirmPassword");
                var $pwd       = $("#password");
                var $con_pwd_v = $con_pwd.val();
                var $pwd_v     = $pwd.val();
                var $from_group = $(this).parents('.form-group');

                console.log($pwd_v);
                console.log($con_pwd_v);

                if((!$pwd_v&&$con_pwd_v)||($pwd_v&&!$con_pwd_v)||($pwd_v!=$con_pwd_v)){
                    $from_group.addClass('has-feedback has-error')
                    $(this).siblings().remove()
                    $(this).after('<i class="form-control-feedback glyphicon-remove glyphicon" data-bv-icon-for="password" style=""></i><small data-bv-validator="identical" data-bv-validator-for="password" class="help-block" style="display: block;">密码不一致</small>')
                    btn.attr('disabled',true)
                }else{
                    var pass=$('input[type="password"]');
                    pass.parents('.form-group').removeClass('has-error')
                    pass.parents('.form-group').addClass('has-feedback has-success')
                    pass.siblings().remove()
                    pass.after('<i class="form-control-feedback glyphicon glyphicon-ok" data-bv-icon-for="password" style="display: block;"></i>');
                    btn.attr('disabled',false)
                }
            })
        }



        $("#defaultForm").bootstrapValidator({
            message: '无效输入',
            feedbackIcons: valitate_class,
            submitButtons: 'button[type="submit"]',
            fields: fieldsArr
        })


    });

    //>>>>>> 图片点击上传 <<<<<<
     $("#portrait").on('change',function(){
         preview(this);
     });
    //>>>>>> 图片拖拽上传 <<<<<<
    //必须将jq对象转换为js对象，调用原生方法
    var oDiv = $("#localImag").get(0);
    var oP = $("#preview").get(0);
    var portrait = $("#portrait").get(0);
    oDiv.ondragenter = function() { //进入
        var img=$(this).find('#preview');
        $(this).css('border-color','red');
    }
    oDiv.ondragover = function(e) { //移动，需要阻止默认行为，否则直接在本页面中显示文件
        e.preventDefault();
    }
    oDiv.onleave = function() { //离开
        $(this).html('请将图片文件拖拽至此区域！');
    }

    oDiv.ondrop = function(e) { //拖拽放置，也需要阻止默认行为
        event=getEvent(e)
//        dropFileUpload(oDiv,oP,portrait,event)
        preview(portrait);
    }


    /*剪裁*/
    var options =
    {
        thumbBox: '.thumbBox',
        spinner: '.spinner',
        imgSrc: preview_src
    }
    var cropper = $('.imageBox').cropbox(options);
    $('#upload-file').on('change', function(){
        preview(this)
    })
    $('#btnCrop').on('click', function(){
        Crop()
    })
    Crop();
    $('#j-upload').on('click',function() {
        var fd=new FormData();
        var getBlob = cropper.getBlob();

        fd.append('file',getBlob,'aaa.png');
        uploadImg(fd)
    });
    $('#btnZoomIn').on('click', function(){
        cropper.zoomIn();
    });
    $('#btnZoomOut').on('click', function(){
        cropper.zoomOut();
    })
    function uploadImg(fd = { }){

        jQuery.ajax({
            url:"?r=admin/common/uploadImg",
            type:'POST',
            data:fd,
            processData: false,  // 告诉jQuery不要去处理发送的数据
            contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
            success:function(data){
                console.log(data)
                console.log(JSON.parse(data))
            }
        });
    }
    function Crop(){
        var img = cropper.getDataURL();
        $('.cropped').html('');
        $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:64px;margin-top:4px;border-radius:64px;box-shadow:0px 0px 12px #7E7E7E;" ><p>64px*64px</p>');
        $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:128px;margin-top:4px;border-radius:128px;box-shadow:0px 0px 12px #7E7E7E;"><p>128px*128px</p>');
        $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:180px;margin-top:4px;border-radius:180px;box-shadow:0px 0px 12px #7E7E7E;"><p>180px*180px</p>');
    }
    function preview(self){
        var reader = new FileReader();
        reader.onload = function(e) {
            options.imgSrc = e.target.result;
            cropper = $('.imageBox').cropbox(options);
        }
        reader.readAsDataURL(self.files[0]);
        self.files=null;
    }
<?php echo '</script'; ?>
><?php }
}
