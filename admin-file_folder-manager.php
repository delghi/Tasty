<?php

session_start();

require_once "include/beContent.inc.php";
require_once "include/content.inc.php";
require_once "include/auth.inc.php";
require_once "include/view/template/InitGraphic.php";

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$fileToFolderEntity);

$form->addTitleForm("File to Folder Management");
$form->addSection('file details');
$form->addFile("file", "Scegli il file");

$main->setContent("body", $form->requestAction());

$main->close();  

?>