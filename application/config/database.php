<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
    'default' => array(
        'type'       => 'PDO',
        'connection' => array(            
            'dsn'        => 'mysql:host=127.0.0.1;dbname=kohana',
            'username'   => 'root',
            'password'   => '',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
);