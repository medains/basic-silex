<?php
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\MonoLogServiceProvider;
use Monolog\Handler\StreamHandler;

class SilexApp extends Application
{
    use Application\TwigTrait;
    use Application\MonologTrait;
}

$app = new SilexApp();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new Silex\Provider\MonologServiceProvider(),
    [
        'monolog.name'  => 'app',
        //'monolog.level' => 'debug',
        'monolog.handler' => new StreamHandler('php://stderr', \Monolog\Logger::DEBUG),
    ]
);
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...
    return $twig;
});
return $app;
