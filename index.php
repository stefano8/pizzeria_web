<?php

// caricamento delle librerie di Smarty attraverso file smartyHeader.php
require('./smartyHeader.php');

$title = 'PizzeriaWEB';

$smarty->assign('title', $title);


$smarty->display('index.tpl');

?>