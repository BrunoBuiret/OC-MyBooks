<?php
namespace MyBooks\Controller;

use Silex\Application;

class PublicController
{
    /**
     * Home page.
     *
     * @param \Silex\Application $app The Silex application
     * @return string
     */
    public function indexAction(Application $app)
    {
        return $app['twig']->render(
            'index.html.twig',
            array(
                'books' => $app['dao.book']->findAll()
            )
        );
    }
}