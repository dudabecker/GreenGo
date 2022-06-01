<?php

    class Controller {

        public static function callUseCase(string $useCase = null){
            //chamar o metodo de uso -> caso o caso de uso não tenha valor, o padrão vai ser nulo

            if(function_exists("$useCase")){
                call_user_func("$useCase");
                //chama a função pelo nome e retorna vdd se a função existir ou da erro se não existir
            } else{
                throw new Exception("O caso de uso chamado não existe");
            }
        }

        public static function loadView(string $path, array $data = null){

            extract($data);

            
            $caminho = __DIR__."/../views/" .$path;

            if(file_exists ($caminho)){
                require __DIR__."/../views/users/list.php";
            } else {
                print "erro";
            }
        }

    }

    if(isset($_GET['acao'])){
        $acao = $_GET['acao'];
    } else{
        $acao = "preventDefult";
    }
    
    Controller::callUseCase($acao);
    //para substituir o switch de chamar as funções