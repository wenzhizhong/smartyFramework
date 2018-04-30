<?php
/* Smarty version 3.1.30, created on 2018-04-23 20:12:08
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\templates\login\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5addcd98aa7822_05631157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e6c118e8cbe6e91fbc0ec116f60c689b394cc5' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\templates\\login\\login.tpl',
      1 => 1522982651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../component/header.tpl' => 1,
    'file:../component/footer.tpl' => 1,
  ),
),false)) {
function content_5addcd98aa7822_05631157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../component/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<link rel="stylesheet" href="<?php echo ROOT;?>
public/static/admin/css/login/login.css">
<?php echo '<script'; ?>
 type="application/javascript">
    function check_form(event) {

        var username = document.getElementsByName('username')[0];
        var pwd = document.getElementsByName('pwd')[0];
        var alert_str = '';
        if (!username.value)
            alert_str = '用户名不为空\n';
        if (!pwd.value)
            alert_str += '密码不为空';
        if (alert_str){
            alert(alert_str)

            var event = event || window.event;
            event.preventDefault(); // 兼容标准浏览器
            window.event.returnValue = false; // 兼容IE6~8
        }

    }
<?php echo '</script'; ?>
>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">&nbsp; </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <div class="login-box">
                <div class="login-box2">
                    <h3><span><?php echo $_smarty_tpl->tpl_vars['Login']->value;?>
</span></h3>
                    <form method="post" name="form" action="?r=admin/login/dologin" onsubmit="check_form(event)">
                        <ul>
                            <li><input type="text" name="username" id="username" placeholder="用户名"></li>
                            <li><input type="password" name="pwd" id="pwd" placeholder="密码"></li>
                            <li><input type="submit" value="提交"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"> &nbsp;</div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:../component/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
