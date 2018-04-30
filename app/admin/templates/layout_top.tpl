<{config_load file="test.conf" section="setup"}>
<{config_load file="test.conf" section="Customer"}>

<{include file="component/header.tpl" title=foo}>
<{include file="component/nav.tpl" }>

<main class="container-fluid">
    <section class="row">
        <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 border-right main-left">
            <span><{include file="component/side_menu.tpl" }></span>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 main-right">
            <div class="main-content">
