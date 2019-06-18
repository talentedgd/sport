<?php

require_once ROOT . '\models\Admin.php';
require_once ROOT . '\components\Observable.php';
require_once ROOT . '\components\listeners\ChangeDbListener.php';

class AdminController implements Observable
{
    public $observer = array();

    public function __construct()
    {
        $this->observer[] = new ChangeDbListener();
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
        header('Location: http://sport/admin');
    }

    public function actionChangeDb()
    {
        if (isset($_SESSION['admin_id'])) {
            $dbType = $_POST['database'];
            $_SESSION['db'] = $dbType;
        }
        $this->notifyObserver();
    }

    public function addObserver(Observer $observer)
    {
        $this->observer[get_class($observer)] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        unset($this->observer[get_class($observer)]);
    }

    public function notifyObserver()
    {
        foreach ($this->observer as $item){
            $item->handleEvent();
        }
    }
}