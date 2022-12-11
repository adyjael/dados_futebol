<?php

namespace Source\App;

use Exception;

class Web {
        

    public function view($estruturas, $dados = null){

        if(!is_array($estruturas)){
            throw new Exception("Coleção de estruturas invalidas");
        }

        if(!empty($dados) && is_array($dados)){
            extract($dados);
        }

        foreach($estruturas as $estrutura){
            if(!file_exists("source/Views/$estrutura.php")){
                die("A view $estrutura não exite");
            }

            include("source/Views/$estrutura.php");
        }
    }





}