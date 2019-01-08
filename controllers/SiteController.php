<?php

require_once ROOT . '\models\SportCompetition.php';
require_once ROOT . '\models\Location.php';
require_once ROOT . '\models\KindOfSport.php';
require_once ROOT . '\models\City.php';

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