<?php
namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
 
class DemoController implements ControllerProviderInterface {
 
  public function connect(Application $app) {
    $factory=$app['controllers_factory'];
    $factory->get('/',__CLASS__.'::home');
    $factory->get('foo',__CLASS__.'::doFoo');
    return $factory;
  }
 
  public function home() {
    return 'Hello world';
  }
 
  public function doFoo() {
    return 'Bar';
  }
 
}
