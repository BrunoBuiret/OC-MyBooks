<?php
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Unregister XDebug if it exists
if(function_exists('xdebug_disable'))
    xdebug_disable();

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
$app['twig'] = $app->share($app->extend('twig', function(Twig_Environment $twig, $app)
{
    $twig->addExtension(new Twig_Extensions_Extension_Text());
    return $twig;
}));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// Register services
$app['dao.author'] = $app->share(function($app)
{
    return new \MyBooks\DAO\AuthorDAO($app['db']);
});
$app['dao.book'] = $app->share(function($app)
{
    return new \MyBooks\DAO\BookDAO($app['db'], $app['dao.author']);
});