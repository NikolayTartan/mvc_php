<?php

Config::set('site_name', 'Your Site Name');

Config::set('languages', array('en', 'fr'));

//Routes. Route name = method prefix

Config::set('routes', array(
    'default' => '',
    'admin' => 'admin'
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'nick');
Config::set('db.password', '');
Config::set('db.db_name', 'mvc');

Config::set('salt', 'jd5jddjfdf9fdjd');
