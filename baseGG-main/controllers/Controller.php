<?php

    class Controller {

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