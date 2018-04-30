<?php /* Smarty version 3.1.30, created on 2018-04-22 12:50:00
         compiled from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\configs\test.conf" */ ?>
<?php
/* Smarty version 3.1.30, created on 2018-04-22 12:50:00
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\configs\test.conf" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adc14785dd1c4_26349885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c6d2f5ddbf3651250c3d3815204c99a6ae393a' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\configs\\test.conf',
      1 => 1523364541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adc14785dd1c4_26349885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigVars($_smarty_tpl, array (
  'sections' => 
  array (
    'setup' => 
    array (
      'vars' => 
      array (
        'bold' => true,
      ),
    ),
    'Customer' => 
    array (
      'vars' => 
      array (
        'menu' => '
    [
        {
            "first":{"name":"系统简介","url":"?r=admin","icon":"glyphicon glyphicon-th"}
        },
        {
            "first":{"name":"用户管理","url":"javascript:;","icon":"glyphicon glyphicon-user"},
            "second":[
                {"name":"添加","url":"?r=admin/users/goToAdd","icon":"glyphicon glyphicon-star-empty"},
                {"name":"查询","url":"?r=admin/users/goToList","icon":"glyphicon glyphicon-star-empty"}
            ]
        },
        {
            "first":{"name":"文章模块","url":"javascript:;","icon":"glyphicon glyphicon-file"},
            "second":[
                {"name":"bb1","url":"javascript:;","icon":"glyphicon glyphicon-star-empty"},
                {"name":"bb2","url":"javascript:;","icon":"glyphicon glyphicon-star-empty"}
            ]
        }
    ]',
        'protrait' => 'public/uploads/images/portrait/portrait.jpg',
      ),
    ),
  ),
  'vars' => 
  array (
    'title' => 'Smarty测试!',
    'cutoff_size' => 40,
    'Name' => 'Name',
  ),
));
}
}
