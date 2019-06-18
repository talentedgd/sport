<?php

require_once ROOT . '\models\Admin.php';

class AdminController
{
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

    public function actionChangeDb(){
        if (isset($_SESSION['admin_id'])){
            $dbType = $_POST['database'];
            $_SESSION['db'] = $dbType;
        }
        header('Location: http://sport/admin');
    }
}