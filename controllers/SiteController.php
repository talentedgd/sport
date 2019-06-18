<?php

require_once ROOT . '\components\dao\SportCompetitionFactory.php';
require_once ROOT . '\models\Location.php';
require_once ROOT . '\models\KindOfSport.php';
require_once ROOT . '\models\City.php';

class SiteController
{
    public function actionIndex()
    {
        $scFactory = new SportCompetitionFactory();
        $sc = $scFactory->createEssence();
        $competitions = $sc->selectAll();
        require_once ROOT . '\view\site\index.php';
    }

    public function actionAboutCompetition($id)
    {
        $scFactory = new SportCompetitionFactory();
        $sc = $scFactory->createEssence();
        $competition = $sc->selectOne($id);

        $l = new Location();
        $location = $l->selectOne($competition['location_id']);

        $s = new KindOfSport();
        $kindOfSport = $s->selectOne($competition['sport_id']);

        $c = new City();
        $city = $c->selectOne($location['city_id']);


        require_once ROOT . '\view\site\about.php';
    }

    public function actionAboutKindOfSport($id)
    {
        $s = new KindOfSport();
        $kindOfSport = $s->selectOne($id);

        require_once ROOT . '\view\site\sport.php';
    }
}