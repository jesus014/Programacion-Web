<?php

require_once dirname(__FILE__).'/../include/libs/smarty/Smarty.class.php';
$smarty = new Smarty;

$smarty->display('index.tpl');

?>
