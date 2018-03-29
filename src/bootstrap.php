<?php
namespace PPI2;

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;


include 'rotas.php';

$contexto = new RequestContext();
$contexto->fromRequest(Request::createFromGlobals());

$response = Response::create();

$matcher = new UrlMatcher($rotas, $contexto);

try{
    $atributos = $matcher->match($contexto->getPathInfo());
    $controller = $atributos['_controller'];
    $method = $atributos['method'];
    $parametros = '';
    $obj = new $controller($response, $contexto);
    $obj->$method();
} catch (Exception $ex) {
    $response->setContent('Not found fde', Response::HTTP_NOT_FOUND);
}

$response->send();







