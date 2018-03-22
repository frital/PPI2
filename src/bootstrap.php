<?php
namespace PPI2;

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

include 'rotas.php';





$response = Response::create();
$conteudo = '<h1>Vai corinthians</h1><h2> são paulo é bambi</h2>';
$response->setContent($conteudo);
$response->send();








