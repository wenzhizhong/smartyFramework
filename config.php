<?php
/**
 * Created by PhpStorm.
 * User: john_
 * Date: 2017/9/1
 * Time: 15:35
 */
require ROOT.'/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;