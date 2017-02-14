<?php

session_start();
require_once "include/beContent.inc.php";
require_once "include/view/template/InitGraphic.php";



$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);



//Creazione oggetto di tipo news
$newsTemplate = new Skinlet('newsPage');
$news = new Content($newsEntity, $newsImageRelation, $imageEntity);
$news->setFilter('id', $_REQUEST['news']);
$news->apply($newsTemplate);


$main->setContent("news", $newsTemplate->get());


$main->close();

?>