<?php

session_start();
session_destroy();
session_start();

require_once "include/beContent.inc.php";
require_once "include/content.inc.php";
require_once "include/auth.inc.php";
require_once "include/view/template/InitGraphic.php";

$main = new Skin('system');

InitGraphic::getInstance()->createSystemGraphic($main);
$loginBody = new Skinlet('login');
$main->setContent('body', $loginBody->get());

$main->close();  

?>