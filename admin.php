<?php

session_start();

require "include/beContent.inc.php";
require "include/view/template/InitGraphic.php";

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

if (!isset($_SESSION['user'])){
    $body = new Skinlet("admin");
    $main->setContent("body", $body->get());
}
$main->close();  



?>