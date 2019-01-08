<?php
/* Маршруты которые обрабатывает Router */
return array(

    /* Add essence */
    'add-city' => 'competition/addCity',
    'add-sport' => 'competition/addKindOfSport',
    'add-location' => 'competition/addLocation',

    /*------------admin---------------*/

    'admin/competition/([0-9]+)' => 'competition/aboutCompetition/$1',
    'admin' => 'admin/index',
    'login' => 'admin/login',
    'logout' => 'admin/logout',

    /*------------user---------------*/

    'sport/([0-9]+)' => 'site/aboutKindOfSport/$1',
    'competition/([0-9]+)' => 'site/aboutCompetition/$1',
    '' => 'site/index',

    /*'search' => 'films/search',
    'about' => 'site/about',
    'ajax/registration' => 'user/registerAjax',
    'films/([0-9]+)' => 'films/info/$1', // actionInfo в FilmController
    'films/current' => 'films/current', // actionCurrent в FilmController
    'films/future' => 'films/future', // actionFuture в FilmController
    'films' => 'films/all', // actionIndex в FilmController
    '' => 'order/test', // actionIndex в SiteController*/
);