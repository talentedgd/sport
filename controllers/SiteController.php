<?php

require_once ROOT . '/models/SportCompetition.php';

class SiteController
{
    public function actionAllCompetitions()
    {
        $sc = new SportCompetition();
        $result = $sc->selectAll();
        print_r($result);
    }
}