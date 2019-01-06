<?php
/* Маршруты которые обрабатывает Router */
return array(

    'city/([0-9]+)' => 'site/city/$1',
    'all-competitions' => 'site/allCompetitions',

    /*'search' => 'films/search',
    'about' => 'site/about',
    'ajax/registration' => 'user/registerAjax',
    'films/([0-9]+)' => 'films/info/$1', // actionInfo в FilmController
    'films/current' => 'films/current', // actionCurrent в FilmController
    'films/future' => 'films/future', // actionFuture в FilmController
    'films' => 'films/all', // actionIndex в FilmController
    '' => 'order/test', // actionIndex в SiteController*/
);