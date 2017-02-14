<?php

session_start();

require_once "include/beContent.inc.php";
require_once "include/content.inc.php";
require_once "include/auth.inc.php";
require_once "include/view/template/InitGraphic.php";

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$newsEntity);

$form->addSection("News Management");
$form->addText("title", "Titolo", 80, MANDATORY);
$form->addLongDate("date", "Data", MANDATORY);

$form->addEditor("body", "Testo", 20, 50);
$form->addCheck("active", "Attiva");

$imageForm = new ImageForm('imageEntry',$newsEntity);
$imageForm->addImage('foto','Foto');
$form->triggers($imageForm);

$relationForm = new RelationForm("dataEntry5", $newsImageRelation);
$relationForm->addSection('Immagini da legare');
$relationForm->addRelationManager("id_sys_image", "Immagini");
$form->triggers($relationForm);

$main->setContent("body", $form->requestAction());

$main->close();  

?>