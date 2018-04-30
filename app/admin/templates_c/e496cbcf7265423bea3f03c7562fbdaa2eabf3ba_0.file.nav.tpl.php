<?php
/* Smarty version 3.1.30, created on 2018-04-22 12:50:00
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\templates\component\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adc1478769707_63613776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e496cbcf7265423bea3f03c7562fbdaa2eabf3ba' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\templates\\component\\nav.tpl',
      1 => 1523759609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adc1478769707_63613776 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="container-fluid">
    <section class="row modal-header">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo ROOT;?>
public/static/img/logo.png" alt="" height="30"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 right">
            <span>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <?php echo $_SESSION['users']['username'];?>

                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="?r=admin/users/goToAdd&toAction=useCerter&id=<?php echo $_SESSION['users']['id'];?>
">个人中心</a></li>
                    <li><a href="?r=admin/login/loginout">退出</a></li>
                  </ul>
                </div>

            </span>
            <?php if ($_SESSION['users']['protrait']) {?>
                <img class="protrait" src="<?php echo $_SESSION['users']['protrait'];?>
" alt="">
            <?php } else { ?>
                <img class="protrait" src="<?php echo ROOT;
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'protrait');?>
" alt="">
            <?php }?>
        </div>
    </section>
</header><?php }
}
