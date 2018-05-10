<?php

namespace PPI2\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use PPI2\Entidades\Produto;
use PPI2\Modelos\ModeloProdutos;

class ControllerCadastro {

    private $response;
    private $contexto;
    private $twig;

    public function __construct(Response $response, Request $contexto, Environment $twig) {
        $this->response = $response;
        $this->contexto = $contexto;
        $this->twig = $twig;
    }

    public function show() {

        return $this->response->setContent($this->twig->render('cadastro.twig'));
    }

    public function cadastro() {
        // validação
        print_r($this->contexto);
        /*
        $descricao = $this->contexto->get('descricao');
        $preco = $this->contexto->get('preco');
        // depois de validado
        $produto = new Produto($descricao, $preco);
        $modeloProduto = new ModeloProdutos();
        if ($id = $modeloProduto->cadastrar($produto))
            return $this->response->setContent('<script>alert("Produto ' . $id . ' inserido com sucesso")</script>');
        else 
            print_r ("erro na inserção");
         * 
         */
        
    }

}
