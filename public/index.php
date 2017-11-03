<?php

ini_set('display_errors', 1);
require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/app.php';
$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => '/tmp/twig');

require __DIR__.'/../src/controllers.php';

$app->run();
