<?php

namespace PPI2\Modelos;

use PPI2\Util\Conexao;
use PDO;

class ModeloProdutos {
    
    function __construct() {
        
    }

    function listarProdutos(){
        
        try{
            $sql = 'select * from produtos';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
                return 'deu erro na conexão:'.$ex;
        }
       
    }
    
    
}
