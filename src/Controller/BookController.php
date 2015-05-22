<?php
namespace MyBooks\Controller;

use Silex\Application;

class BookController
{
    /**
     * Show book's details.
     *
     * @param \Silex\Application $app The Silex application
     * @param integer $id The book's id.
     * @return string
     */
    public function showAction(Application $app, $id)
    {
        return $app['twig']->render(
            'book-show.html.twig',
            array(
                'book' => $app['dao.book']->find($id)
            )
        );
    }
}