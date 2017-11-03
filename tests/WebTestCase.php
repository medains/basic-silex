<?php
namespace Tests;

use Silex\WebTestCase as BaseWebTestCase;

class WebTestCase extends BaseWebTestCase
{
    public function createApplication()
    {
        $app = require $this->getApplicationDir().'/app.php';
        $app['twig.path'] = array(__DIR__.'/../templates');
        $app['twig.options'] = array('cache' => '/tmp/twig');
        require __DIR__.'/../src/controllers.php';

        return $app;
    }

    public function getApplicationDir()
    {
        return $_SERVER['APP_DIR'];
    }
}
