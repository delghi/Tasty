<?php

session_start();

require_once "include/beContent.inc.php";
require_once "include/content.inc.php";
require_once "include/auth.inc.php";
require_once "include/view/template/InitGraphic.php";

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$servicecategoryEntity);

$form->addSection("Service Category Management");

$form->addText("name", "Name", 40, MANDATORY);
$form->addPosition("position", "Ordering", "name");

if (!isset($_REQUEST['action'])) {
	$_REQUEST['action'] = "edit";
}

$main->setContent("body",$form->requestAction());

$main->close();

?> 