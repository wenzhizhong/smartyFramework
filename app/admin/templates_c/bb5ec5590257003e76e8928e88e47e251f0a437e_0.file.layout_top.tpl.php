<?php
/* Smarty version 3.1.30, created on 2018-04-22 12:50:00
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\templates\layout_top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adc1478612454_88418786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5ec5590257003e76e8928e88e47e251f0a437e' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\templates\\layout_top.tpl',
      1 => 1523004252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:component/header.tpl' => 1,
    'file:component/nav.tpl' => 1,
    'file:component/side_menu.tpl' => 1,
  ),
),false)) {
function content_5adc1478612454_88418786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "Customer", 0);
?>


<?php $_smarty_tpl->_subTemplateRender("file:component/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:component/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="container-fluid">
    <section class="row">
        <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 border-right main-left">
            <span><?php $_smarty_tpl->_subTemplateRender("file:component/side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</span>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 main-right">
            <div class="main-content">
<?php }
}
