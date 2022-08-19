<?php
// session_start();
define('INCLUDE_PATH','http://localhost/mvc_php/');
define('INCLUDE_PATH_FULL','http://localhost/mvc_php/Views/pages/templates/');

// **classe padrao que redireciona as urls tornando amigaveis
Class  Application
{

    public  static function executar($value){
        //verifica se existe a url na posicao[0] depois da barra se nao atribui a home
        $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] :$value;

        // atribui a primeira letra maiuscula a url 
        $url = ucfirst($url);
        $url.="Controller";
        if(isset($_SESSION['login'])){

            if($url == 'LoginController'){

                $url ="HomeController";

            }

            if(file_exists('Controllers/'.$url.'.php')){
                // echo'classe'.$url;
                    $classname = 'Controllers\\'.$url;
                    $controller = new  $classname;
                    // passa a string para a url
                    $controller->executar();
                    // toda classe vai possuir uma funcao executar
            }else{
                exit("Não existe esse controlador!");
            }

        } else{
           
            $url ="LoginController";
            
            if(file_exists('Controllers/'.$url.'.php')){
                // echo'classe'.$url;
                    $classname = 'Controllers\\'.$url;
                    $controller = new  $classname;
                    // passa a string para a url
                    $controller->executar();
                    // toda classe vai possuir uma funcao executar
            }else{
                exit("Não existe esse controlador!");
            }
        }
        
    }
}


