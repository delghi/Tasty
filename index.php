<?php

session_start();
require_once "include/beContent.inc.php";
require_once "include/view/template/InitGraphic.php";


$main = new Skin("theme");
InitGraphic::getInstance()->createGraphic($main);

//Creazione oggetto di tipo menu
$menuTemplate = new Skinlet('menu');
$menu = new Content($menuEntity,$menuEntity);
$menu->setFilter("parent_id", 0);
$menu->setOrderFields("sys_menu_position",'sys_menu_parent',"sys_menu0_position");
$menu->apply($menuTemplate); /* apply(ogetto,'nome prefisso istanza') */

//Creazione oggetto di tipo slider
$sliderTemplate = new Skinlet('slider');
$slider = new Content($sliderEntity, $imageSliderRelation, $imageEntity);
$slider->apply($sliderTemplate);

//Creazione oggetto di tipo news
$newsTemplate = new Skinlet('newsHome');
$news = new Content($newsEntity, $newsImageRelation, $imageEntity);
$news->apply($newsTemplate);

//Creazione oggetto di tipo developer
$developerTemplate = new Skinlet('developer');
$developer = new Content($developerEntity, $developerImageRelation, $imageEntity);
$developer->apply($developerTemplate);

//Creazione oggetto di tipo taxonomy
$taxonomyTemplate = new Skinlet('gallery');
$taxonomy = new Content($taxonomyEntity, $taxonomyImageRelation, $imageEntity);
$taxonomy->apply($taxonomyTemplate);

//Creazione oggetto di tipo page
$pageTemplate = new Skinlet('page');
$page = new Content($pageEntity);
$page->apply($pageTemplate);




$home = new Skinlet("home");
$contact = new Skinlet("contact");

$main->setContent("slider", $sliderTemplate->get());
$main->setContent("body", $home->get());
$main->setContent("menu", $menuTemplate->get());
$main->setContent("news", $newsTemplate->get());
$main->setContent("developer", $developerTemplate->get());
$main->setContent("gallery", $taxonomyTemplate->get());
$main->setContent("page", $pageTemplate->get());
$main->setContent("contact", $contact->get());

$main->close();

?>