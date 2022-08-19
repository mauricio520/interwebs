<?php 

include($_SERVER['DOCUMENT_ROOT'].'/mvc_php/config.php');

if(Painel::statuslogado() == false){

    $app = Application::executar('login');

}else{
    $app = Application::executar('home');
}






?>