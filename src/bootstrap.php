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


$matcher = new UrlMatcher($rotas, $contexto);

print_r($matcher->match('/esporte'));


/*

$response = Response::create();
$conteudo = '<h1>Vai corinthians</h1><h2> são paulo é bambi</h2>';
$response->setContent($conteudo);
$response->send();

*/






