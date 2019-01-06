<?php

require_once ROOT . '\models\SportCompetition.php';

class SiteController
{
    public function actionIndex()
    {
        $sc = new SportCompetition();
        $competitions = $sc->selectAll();
        require_once ROOT . '\view\site\index.php';
    }

    public function actionAboutCompetition($id)
    {
        $sc = new SportCompetition();
        $competition = $sc->selectOne($id);
        require_once ROOT . '\view\site\about.php';
    }
}