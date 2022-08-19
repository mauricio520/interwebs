<?php
Class Painel{

    public static function statuslogado(){
        if(isset($_SESSION['login'])){
            $retorno = true;
        }else{
            $retorno = false;
        }
        return $retorno ;
    }
}