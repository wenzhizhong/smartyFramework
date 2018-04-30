<{config_load file="test.conf" section="setup"}>
<{include file="header.tpl" title=foo}>


<ul>
<{foreach $book as $item }>
    <li><{$item['name']}></li>
<{/foreach}>
</ul>

<{include file="footer.tpl"}>
