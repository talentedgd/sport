<?php

/* Показ ошибок на время разработки */
ini_set('display_errors', 1);
error_reporting(E_ALL);

/* Константа с путем к корню файла */
define('ROOT', dirname(__FILE__));

$dbType = '';
session_start();
if (!isset($_SESSION['db'])) {
    $_SESSION['db'] = 1;
    $dbType = 'mysql';
}else{
    if($_SESSION['db']) $dbType = 'mysql';
    else $dbType = 'mongodb';
}

/* Подклчение файлов маршрутизатора и бд*/
require_once(ROOT . "/vendor/autoload.php");
require_once(ROOT . "/components/Router.php");
require_once(ROOT . "/components/dao/$dbType/Db.php");
require_once(ROOT . "/components/dao/MyDaoInterface.php");
require_once(ROOT . "/components/dao/$dbType/DaoFactory.php");

/* Вызов Router */
$router = new Router();
$router->run();