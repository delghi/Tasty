<?php


class EntityTaxonomy extends Entity
{
    public function __construct($database, $name)
    {
        parent::__construct($database,$name);
        $this->addField('name', VARCHAR, 255, MANDATORY);
        $this->addField('icon', VARCHAR, 255, MANDATORY);
        $this->setPresentation("name");
    }
}

$taxonomyEntity = new EntityTaxonomy($database,
Config::getInstance()->getConfigurations()['database']['prefix']."taxonomy");
$taxonomyEntity->addReference($imageEntity, 'foto');
