<?php

require_once ROOT . '\models\SportCompetition.php';
require_once ROOT . '\models\Location.php';
require_once ROOT . '\models\KindOfSport.php';
require_once ROOT . '\models\City.php';

class CompetitionController
{
    public function actionIndex()
    {
        if (isset($_SESSION['admin_id'])) {
            $sc = new SportCompetition();
            $competitions = $sc->selectAll();

            $s = new KindOfSport();
            $kindsOfSport = $s->selectAll();

            $c = new City();
            $cities = $c->selectAll();

            require_once ROOT . '\view\admin\index.php';
        } else {
            require_once ROOT . '\view\admin\login.php';
        }
    }

    public function actionAboutCompetition($id)
    {
        if (isset($_SESSION['admin_id'])) {
            $sc = new SportCompetition();
            $competition = $sc->selectOne($id);

            $l = new Location();
            $location = $l->selectOne($competition['location_id']);

            $s = new KindOfSport();
            $kindsOfSport = $s->selectAll();

            $c = new City();
            $cities = $c->selectAll();

            require_once ROOT . '\view\admin\about.php';
        } else {
            header('Location: http://sport/login');
        }
    }

    public function actionAddKindOfSport()
    {
        $params = array();
        $params['name'] = strip_tags(trim($_POST['sportName']));
        $params['description'] = strip_tags(trim($_POST['sportDescription']));

        $sport = new KindOfSport();
        if ($sport->insertItem($params)) {
            $_SESSION['essenceSuccess'] = 'Вид спортра успешно добавлен';
        } else {
            $_SESSION['essenceError'] = 'Ошибка добавления';
        }
        header('Location: http://sport/admin');
    }

    public function actionAddCity()
    {
        $params = array();
        $params['name'] = strip_tags(trim($_POST['cityName']));

        $city = new City();
        if ($city->insertItem($params)) {
            $_SESSION['essenceSuccess'] = 'Город успешно добавлен';
        } else {
            $_SESSION['essenceError'] = 'Ошибка добавления';
        }
        header('Location: http://sport/admin');
    }

    public function actionAddLocation()
    {
        $params = array();
        $params['name'] = strip_tags(trim($_POST['locationName']));
        $params['address'] = strip_tags(trim($_POST['locationAddress']));
        $params['description'] = strip_tags(trim($_POST['locationDescription']));
        $params['city_id'] = strip_tags(trim($_POST['locationCities']));

        $location = new Location();
        if ($location->insertItem($params)) {
            $_SESSION['essenceSuccess'] = 'Местоположение успешно добавлено';
        } else {
            $_SESSION['essenceError'] = 'Ошибка добавления';
        }
        header('Location: http://sport/admin');
    }

    public function actionCityLocations()
    {
        $id = (int) strip_tags(trim($_POST['id']));
        $location = new Location();
        $locationList = $location->getLocationByCityId($id);
        echo $locationList;
    }
}