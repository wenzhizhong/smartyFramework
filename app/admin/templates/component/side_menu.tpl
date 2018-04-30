<aside class="side_menu">

    <ul menu="1">
    <{$menu=#menu#|json_decode}>   <!-- 调用菜单json字符串 -->
    <{$menu_cap=a}>
    <{foreach  $menu as $item }>
        <{$menu_no=1}>
        <li menu_cap="<{$menu_cap}>">
            <div>
                <a href="<{$item->first->url}>"><span class="glyphicon <{$item->first->icon}>" aria-hidden="true"></span>&nbsp;<{$item->first->name}></a>
                <{if isset($item->second)}><span class="triangle_padding"><a class="triangle" ></a><{/if}></span>
            </div>

            <{if isset($item->second)}>
            <ul>
                <{foreach  $item->second as $item2 }>
                    <li  menu_no="<{$menu_cap}><{$menu_no+1}>"><div><a href="<{$item2->url}>"><span class="glyphicon <{$item2->icon}>" aria-hidden="true"></span>&nbsp;<{$item2->name}></a></div</li>
                <{/foreach}>
            </ul>
            <{/if}>
        </li>
        <{$menu_cap=(($menu_cap|ord)+1)|chr}>
    <{/foreach}>
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
<script>
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
</script>