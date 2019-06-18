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

            $s = new KindOfSport();
            $kindsOfSport = $s->selectAll();

            $l = new Location();
            $currentLocation = $l->selectOne($competition['location_id']);

            $c = new City();
            $cities = $c->selectAll();
            $currentCity = $c->selectOne($currentLocation['city_id']);

            $currentCityLocations = $cityLocations = $l->getLocationByCityId($currentCity['id']);

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
        $id = (int)strip_tags(trim($_POST['id']));
        $location = new Location();
        $locationList = json_encode($location->getLocationByCityId($id));
        echo $locationList;
    }

    public function actionUpdateCompetition()
    {
        $competition = array();
        $competition['id'] = (int)strip_tags(trim($_POST['id']));
        $competition['name'] = strip_tags(trim($_POST['name']));
        $competition['date'] = strip_tags(trim($_POST['date']));
        $competition['time'] = strip_tags(trim($_POST['time']));
        $competition['description'] = strip_tags(trim($_POST['competitionDescription']));
        $competition['sport_id'] = (int)strip_tags(trim($_POST['kindOfSport']));
        $competition['location_id'] = (int)strip_tags(trim($_POST['competitionLocations']));

        $id = $competition['id'];

        $c = new SportCompetition();
        if ($c->updateItem($competition)) {
            $_SESSION['updateSuccess'] = 'Соревнование успешно изменено';
        } else {
            $_SESSION['updateError'] = 'Ошибка обновления';
        }
        header("Location: http://sport/admin/competition/{$id}");
    }

    public function actionDeleteCompetition($id)
    {
        $competition = new SportCompetition();
        if ($competition->deleteItem($id)) {
            $_SESSION['deleteSuccess'] = 'Соревнование удалено';
        } else {
            $_SESSION['deleteError'] = 'Ошибка удаления';
        }
        header('Location: http://sport/admin');
    }

    public function actionAddCompetition()
    {
        $params = array();
        $params['name'] = strip_tags(trim($_POST['name']));
        $params['date'] = strip_tags(trim($_POST['date']));
        $params['time'] = strip_tags(trim($_POST['time']));
        $params['description'] = strip_tags(trim($_POST['description']));
        $params['sport_id'] = strip_tags(trim($_POST['sport']));
        $params['location_id'] = strip_tags(trim($_POST['location']));

        $competition = new SportCompetition();
        if ($competition->insertItem($params)) {
            $_SESSION['essenceSuccess'] = 'Соревнование успешно добавлено';
        } else {
            $_SESSION['essenceError'] = 'Ошибка добавления';
        }
        header('Location: http://sport/admin');
    }
}