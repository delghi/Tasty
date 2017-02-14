<?php

session_start();

require_once "include/beContent.inc.php";
require_once "include/content.inc.php";
require_once "include/auth.inc.php";
require_once "include/view/template/InitGraphic.php";

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$imageEntity);

$form->addTitleForm("Image Management");
$form->addText('title', 'titolo', 255);
$form->addText('caption', 'caption', 255);
$form->addText('alt', 'alt text', 255);
$form->addSection('image details');
$form->addFile("file", "Scegli il file");

$main->setContent("body", $form->requestAction());

$main->close();  

?>