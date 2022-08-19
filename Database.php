<?php

define('HOST','localhost');
define('DATABASE','projeto_php');
define('USER','root');
define('PASSWORD','');

Class Database
{

  public function conect()
    {
        if(!isset($pdo)){

            try {

                $pdo = new PDO('mysql:host='. HOST .';dbname='. DATABASE , USER , PASSWORD , array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

            } catch (Exception $e) {

                echo 'Erro ao Conectar - Tente Mais Tarde';
            }
        
        }
        return $pdo;
    }

}

?>


