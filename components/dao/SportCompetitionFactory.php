<?php

require_once ROOT . '\models\SportCompetition.php';
require_once ROOT . '\components\dao\IDaoFactory.php';

class SportCompetitionFactory implements IDaoFactory
{

    public function createEssence(): MyDaoInterface
    {
        return new SportCompetition();
    }
}