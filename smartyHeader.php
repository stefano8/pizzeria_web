<?php

//configurazioni

require_once('./Smarty/libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->caching = true;
$smarty->cache_lifetime= 120;
$smarty->template_dir= './templates';
$smarty->compile_dir= './templates_c';
$smarty->config_dir = './configs';
$smarty->cache_dir = './cache';

?>