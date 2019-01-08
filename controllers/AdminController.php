<?php

require_once ROOT . '\models\SportCompetition.php';
require_once ROOT . '\models\Admin.php';
require_once ROOT . '\models\KindOfSport.php';
require_once ROOT . '\models\City.php';

class AdminController
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

    public function actionLogin()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (Admin::checkUserData($username, $password)) {
                header('Location: http://sport/admin');
            } else {
                $_SESSION['loginError'] = 'error';
                header('Location: http://sport/login');
            }
        } else {
            require_once ROOT . '\view\admin\login.php';
        }
    }

    public function actionLogout()
    {
        if (isset($_SESSION['admin_id'])) {
            unset($_SESSION['admin_id']);
            header('Location: http://localhost/sport/');
        }
        // Redirect
        header('Location: http://sport/');
    }
}