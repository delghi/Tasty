<?php

session_start();

require_once "include/beContent.inc.php";
require_once "include/content.inc.php";
require_once "include/auth.inc.php";
require_once "include/view/template/InitGraphic.php";

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$taxonomyEntity);

$form->addSection('Taxonomy Management');

$form->addText('name', 'Nome', 60,null,60,true);
$form->addText('icon', 'Icon', 60);




$imageForm=new ImageForm('imageEntry',$taxonomyEntity);
$imageForm->addImage('foto','Foto');
$form->triggers($imageForm);

$relationForm = new RelationForm("dataEntry6", $taxonomyImageRelation);
$relationForm->addSection('Immagini da legare');
$relationForm->addRelationManager("id_sys_image", "Immagini");
$form->triggers($relationForm);

if (!isset($_REQUEST['action'])) {
	$_REQUEST['action'] = 'edit';
}

$main->setContent('body',$form->requestAction());

$main->close();  

?>