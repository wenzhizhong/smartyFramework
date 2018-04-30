<?php
/* Smarty version 3.1.30, created on 2018-04-22 12:50:00
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\templates\component\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adc14786a32a5_23729162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6a88e5b3bf6646f33fbaab46668faf4d6228ea' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\templates\\component\\header.tpl',
      1 => 1523004166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adc14786a32a5_23729162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
 - <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Name');?>
</title>
    <link rel="stylesheet" href="<?php echo ROOT;?>
public/static/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT;?>
public/static/bootstrap4/css/bootstrapValidator.css">
    <link rel="stylesheet" href="<?php echo ROOT;?>
public/static/admin/css/common/common.css">
    <?php echo '<script'; ?>
 src="<?php echo ROOT;?>
public/static/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo ROOT;?>
public/static/js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo ROOT;?>
public/static/bootstrap4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo ROOT;?>
public/static/bootstrap4/js/bootstrapValidator.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "Customer", 0);
}
}
