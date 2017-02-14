<?php

require_once "entityDeveloper.php";
require_once "entityTaxonomy.php";

require_once "relationNewsFoto.php";
require_once "relationDeveloperFoto.php";
require_once "relationTaxonomyFoto.php";


/*entities*/
$developerEntity->connect();
$taxonomyEntity->connect();

/*relation*/
$newsImageRelation->connect();
$developerImageRelation->connect();
$taxonomyImageRelation->connect();
?>