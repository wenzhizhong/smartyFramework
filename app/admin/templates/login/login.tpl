<{config_load file="test.conf" section="setup"}>
<{include file="../component/header.tpl" title=foo}>
<link rel="stylesheet" href="<{ROOT}>public/static/admin/css/login/login.css">
<script type="application/javascript">
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
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">&nbsp; </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <div class="login-box">
                <div class="login-box2">
                    <h3><span><{$Login}></span></h3>
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


<{include file="../component/footer.tpl"}>
