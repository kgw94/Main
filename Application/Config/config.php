<?php
  return array(

    'defaults' => array(
         'controller' => 'Home',
         'action' => 'Index',
         'view'   => 'Home',
         'App' => 'Minimal MVC version 0.1 ',
         'timezones' => '',
        
    ),
    'database' => array(
        'host' => 'localhost',
        'username' => 'root',
        'password' => "",
        'database' => " ",
        'database_type' => 'mysql'
    ),
    //'base_url' => 'https://localhost/router/'
    'base_url' => 'http://localhost/router/',
    'App_name' => 'Mini Gallery 0.1'
);