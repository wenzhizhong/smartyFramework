<?php
/* Smarty version 3.1.30, created on 2018-04-22 17:56:29
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\templates\test\formData.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adc5c4dd4a576_67681413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30ca8de302c482f25ba621095c72cbd8a3adefc3' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\templates\\test\\formData.tpl',
      1 => 1524390984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout_top.tpl' => 1,
    'file:layout_left.tpl' => 1,
  ),
),false)) {
function content_5adc5c4dd4a576_67681413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "Customer", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title glyphicon glyphicon-user">用户编辑</h3>
    </div>

    <div class="panel-body">
        <form enctype="multipart/form-data" method="post" name="fileinfo">
            <label>Your email address:</label>
            <input type="email" autocomplete="on" autofocus name="userid" placeholder="email" required size="32" maxlength="64" /><br />
            <label>Custom file label:</label>
            <input type="text" name="filelabel" size="12" maxlength="32" /><br />
            <label>File to stash:</label>
            <input type="file" name="file" required />
        </form>
        <div id="output"></div>
        <a id="send">Stash the file!</a>
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

$("#send").on('click',function(){

    var oMyForm = new FormData();

    oMyForm.append("username", "Groucho");
    oMyForm.append("accountnum", 123456); // 数字123456被立即转换成字符串"123456"

    // fileInputElement中已经包含了用户所选择的文件
    var fileInputElement=$('input[type=file]')[0]
    oMyForm.append("userfile", fileInputElement.files[0]);

    var oFileBody = "<a id='a'><b id='b'>hey!</b></a>"; // Blob对象包含的文件内容
    var oBlob = new Blob([oFileBody], { type: "text/xml"});

    oMyForm.append("webmasterfile", oBlob);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "?r=admin/test/uploadBlob");
    oReq.onload = function(oEvent){
        if(oReq.status == 200){
            console.log("Uploaded!")
        }else{
            console.log("Error" + oReq.status + "occurred uploading your file!")
        }
    };
    oReq.onreadystatechange=function (){
        if(oReq.status==200)//判断是否成功,如果是200，就代表成功
        {
            console.log("成功"+oReq.responseText);//读取a.txt文件成功就弹出成功。后面加上oAjax.responseText会输出a.txt文本的内容
        }
        else
        {
            console.log("失败");
        }
    };
    oReq.send(oMyForm);
})

<?php echo '</script'; ?>
><?php }
}
