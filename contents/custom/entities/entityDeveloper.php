<?php


class EntityDeveloper extends Entity
{
    public function __construct($database, $name)
    {
        parent::__construct($database,$name);
        $this->addField('name', VARCHAR, 255, MANDATORY);
        $this->addField('surname', VARCHAR, 255, MANDATORY);
        $this->addField('email', VARCHAR, 255);
        $this->addField('gitaccount', VARCHAR, 255);
        $this->addField('birthday', LONGDATE);
		$this->setPresentation("surname");
    }
}

$developerEntity = new EntityDeveloper($database,
Config::getInstance()->getConfigurations()['database']['prefix']."developer");
$developerEntity->addReference($imageEntity, 'foto');

?>