<?php
// Doctrine
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => '127.0.0.1',
    'port'     => '3306',
    'dbname'   => 'mybooks',
    'user'     => 'mybooks_user',
    'password' => 'mybooks_pass'
);