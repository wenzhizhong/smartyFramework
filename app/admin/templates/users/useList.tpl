<{config_load file="test.conf" section="Customer"}>
<{include file="layout_top.tpl"}>
<style type="text/css">
    td span{
        display: inline-block;
        width: 100%;
        text-align: center;
    }
</style>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title glyphicon glyphicon-user">用户列表</h3>
    </div>

    <div class="panel-body">
        <form id="defaultForm" method="post" class="form-horizontal" action="?r=admin/users/useDel"   role="form" enctype="multipart/form-data">
            <table class="table table-bordered table-responsive">
                <tr>
                    <th class="text-center active" width="60px">全选</th>
                    <th class="text-center active">头像</th>
                    <th class="text-center active">用户名</th>
                    <th class="text-center active">email</th>
                    <th class="text-center active" width="120px">操作</th>
                </tr>
                <{if $list}>
                <{foreach $list as $item }>
                <div class="form-group">
                    <tr>
                        <td><span><input type="checkbox" name="ids" value="<{$item['id']}>"></span></td>
                        <td><span class="img_pro"><{if $item['protrait']}><img class="protrait img-thumbnail" src="<{$item['protrait']}>" alt="头像" style = 'height: 50px;'><{/if}></span></td>
                        <td><span class="j-username"><{$item['username']}></span></td>
                        <td><span><{$item['email']}></span></td>
                        <td>
                            <span>
                                <button type="button" class="btn btn-primary btn-xs j-btn-edit" href="?r=admin/users/goToAdd&toAction=useCerter&id=<{$item['id']}>">编辑</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger btn-xs j-btn-del"  href="?r=admin/users/goToTel&id=<{$item['id']}>">删除</button>
                            </span>
                        </td>
                    </tr>
                </div>
                <{/foreach}>
                <{/if}>
            </table>
        </form>
    </div>
</div>


<{include file="layout_left.tpl"}>
<script  type="text/javascript">
    $(function(){
        var img_pro = $(".img_pro");
        img_pro.each(function(){
            var img=$(this).children('img')
            if(img.length){
                var img_h=img.css('height');
                $(this).closest('tr').find('span').css('line-height',img_h)
            }
        })

        var editBtn=$(".j-btn-edit");
        var editTel=$(".j-btn-del");
        editBtn.on('click',function(){
            window.location.href=$(this).attr('href')
        })
        editTel.on('click',function(){
            var username=$(this).parents('td').siblings('td').find('.j-username').text()

            if(confirm('您确认要删除:'+username+"吗？"))
                window.location.href=$(this).attr('href')
        })

    })

</script>