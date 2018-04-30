<header class="container-fluid">
    <section class="row modal-header">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><img src="<{ROOT}>public/static/img/logo.png" alt="" height="30"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 right">
            <span>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <{$smarty.session.users.username}>
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="?r=admin/users/goToAdd&toAction=useCerter&id=<{$smarty.session.users.id}>">个人中心</a></li>
                    <li><a href="?r=admin/login/loginout">退出</a></li>
                  </ul>
                </div>

            </span>
            <{if $smarty.session.users.protrait}>
                <img class="protrait" src="<{$smarty.session.users.protrait}>" alt="">
            <{else}>
                <img class="protrait" src="<{ROOT}><{#protrait#}>" alt="">
            <{/if}>
        </div>
    </section>
</header>