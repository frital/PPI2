<?php
 namespace PPI2\Controller;
 
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\RequestContext;
 
class ControllerEsporte {
    
    private $response;
    private $contexto;
    
    public function __construct(Response $response, RequestContext $contexto) {
        $this->response = $response;
        $this->contexto = $contexto;
    }
    
    public function msgInicial(){
        //criar um objeto do tipo entidade // buscar os dados no banco  de dado 
        return $this->response->setContent('mensagem qualquer');
    }
    

}
