<?php
// Public controller
$app->get('/', 'MyBooks\Controller\PublicController::indexAction')
    ->bind('home');

// Book controller
$app->get('/book/{id}', 'MyBooks\Controller\BookController::showAction')
    ->bind('book_show')
    ->assert('id', '\d+');