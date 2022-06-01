<?php

    class Controller {

        //chama caso de uso
        public static function callUseCase(string $useCase = null){
            
            if(function_exists($useCase)){
                call_user_func($useCase); 
            } else {
                //mandar para outra pagina
                throw new Exception("o caso de uso chamado não existe");

            }
         
        }

        public static function loadView(string $path, $data = null){

            extract($data);

            
            $caminho = __DIR__."/../views/" .$path;

            if(file_exists ($caminho)){
                require __DIR__."/../views/users/list.php";
            } else {
                print "erro";
            }
        }

    }

    //verifica se variavel existe ou foi informada
    if(isset($_GET['acao'])){
        $acao = $_GET['acao'];
    } else {
        $acao = "preventDefault"; 
    }

    Controller::callUseCase($acao); 