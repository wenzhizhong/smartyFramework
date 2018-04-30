<?php
/* Smarty version 3.1.30, created on 2018-04-22 12:50:00
  from "D:\UPUPW_NP5.6-1511\UPUPW_NP5.6\htdocs\smarty3_test\app\admin\templates\component\side_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adc1478977a66_16548947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900672ff3dd7c8f58c4351d9741becca0648181d' => 
    array (
      0 => 'D:\\UPUPW_NP5.6-1511\\UPUPW_NP5.6\\htdocs\\smarty3_test\\app\\admin\\templates\\component\\side_menu.tpl',
      1 => 1522933444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adc1478977a66_16548947 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside class="side_menu">

    <ul menu="1">
    <?php $_smarty_tpl->_assignInScope('menu', json_decode($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menu')));
?>   <!-- 调用菜单json字符串 -->
    <?php $_smarty_tpl->_assignInScope('menu_cap', 'a');
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('menu_no', 1);
?>
        <li menu_cap="<?php echo $_smarty_tpl->tpl_vars['menu_cap']->value;?>
">
            <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->first->url;?>
"><span class="glyphicon <?php echo $_smarty_tpl->tpl_vars['item']->value->first->icon;?>
" aria-hidden="true"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->first->name;?>
</a>
                <?php if (isset($_smarty_tpl->tpl_vars['item']->value->second)) {?><span class="triangle_padding"><a class="triangle" ></a><?php }?></span>
            </div>

            <?php if (isset($_smarty_tpl->tpl_vars['item']->value->second)) {?>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->second, 'item2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
?>
                    <li  menu_no="<?php echo $_smarty_tpl->tpl_vars['menu_cap']->value;
echo $_smarty_tpl->tpl_vars['menu_no']->value+1;?>
"><div><a href="<?php echo $_smarty_tpl->tpl_vars['item2']->value->url;?>
"><span class="glyphicon <?php echo $_smarty_tpl->tpl_vars['item2']->value->icon;?>
" aria-hidden="true"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item2']->value->name;?>
</a></div</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <?php }?>
        </li>
        <?php $_smarty_tpl->_assignInScope('menu_cap', chr(((ord($_smarty_tpl->tpl_vars['menu_cap']->value))+1)));
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</aside>
<style type="text/css">
    .click_active{
        background-color: #bfc9dd;
    }
    .hover_active{
        background-color: #d2ddf1;
        color: #000e6f;
    }
</style>
<?php echo '<script'; ?>
>
    $(function(){
        var cur_menu_item={ 'menu_cap':null }
        var $ul=$('.side_menu>ul');
        var $li=$ul.find('li');

        $li.hover(function () {
            if(!$(this).is('.click_active'))
                $(this).addClass('hover_active')
        },function () {
                $(this).removeClass('hover_active')
        });
        $li.click(function(){
            var $dropdown=$(this).children('ul');
            var menu_cap = $(this).attr('menu_cap');
            var menu_no = $(this).attr('menu_no');

            if(menu_no) menu_cap = menu_no.slice(0,1)

            if(cur_menu_item.menu_cap && cur_menu_item.menu_cap==menu_cap&&!menu_no) {
                if(!$dropdown.length){
                    $li.find('ul').stop(true,false).slideUp();
                }
                $dropdown.stop(true,false).slideToggle()
//                return
            }if(cur_menu_item.menu_cap && cur_menu_item.menu_cap!=menu_cap) {
                $li.find('ul').stop(true,false).slideUp();
                $dropdown.stop(true,false).slideToggle()
            }else{
                if($dropdown.length){
                    $li.find('ul').stop(true,false).slideUp();
                    $dropdown.stop(true,false).slideToggle()
                }
            }
            cur_menu_item.menu_cap = menu_cap;
            $li.find('li').removeClass('click_active')
            $(this).removeClass('hover_active');
            $(this).addClass('click_active').siblings('li').removeClass('click_active');
            window.event? window.event.cancelBubble = true : e.stopPropagation();
        })
    })
<?php echo '</script'; ?>
><?php }
}
