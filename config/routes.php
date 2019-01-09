<?php
/* Маршруты которые обрабатывает Router */
return array(

    /*------------admin---------------*/

    'city-locations' => 'competition/cityLocations',

    'update-competition' => 'competition/updateCompetition',

    'add-city' => 'competition/addCity',
    'add-sport' => 'competition/addKindOfSport',
    'add-location' => 'competition/addLocation',
    'admin/competition-delete/([0-9]+)' => 'competition/deleteCompetition/$1',

    'admin/competition/([0-9]+)' => 'competition/aboutCompetition/$1',
    'admin' => 'competition/index',
    'login' => 'admin/login',
    'logout' => 'admin/logout',

    /*------------guest---------------*/

    'sport/([0-9]+)' => 'site/aboutKindOfSport/$1',
    'competition/([0-9]+)' => 'site/aboutCompetition/$1',
    '' => 'site/index',
);