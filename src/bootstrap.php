<?php
namespace PPI2;

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = Response::create();

$conteudo = '<h1>Vai corinthians</h1>';
$response->setContent($conteudo);
$response->send();








