<?php
/* Smarty version 3.1.30, created on 2018-04-23 20:12:18
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5addcda298e3d7_01743300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b23fdd60e70ff65882aabe621b6c56f228af3d9' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\templates\\index.tpl',
      1 => 1523363166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout_top.tpl' => 1,
    'file:layout_left.tpl' => 1,
  ),
),false)) {
function content_5addcda298e3d7_01743300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title glyphicon glyphicon-user">系统简介</h3>
    </div>

    <div class="panel-body">
        <form id="defaultForm"  class="form-horizontal" action="" >
            <div class="form-group">
                <div class="col-sm-12">
                    <div contenteditable="true">
                        本系统是基于smarty3封装的php管理系统
                    </div>
                </div>
            </div>

            <!--<div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>

            </div>-->
        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:layout_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
