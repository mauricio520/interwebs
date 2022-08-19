<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'].'/mvc_php/Database.php');

$action = $_POST['action'];

switch ($action) {
        case 'login':
            login();
        break;
        case 'Logout':
            Logout();
        break;
}


function  login(){

$cadastro_cpf = $_POST['cadastro_cpf'];
$cadastro_senha = $_POST['cadastro_senha'];


$odbc = new Database();

$sql = $odbc->conect()->prepare("SELECT cadastro_cpf,cadastro_senha FROM cadastro WHERE cadastro_cpf = '$cadastro_cpf' AND cadastro_senha = '$cadastro_senha' AND cadastro_status = 1 ");
$sql->execute();

//registros retornados = 1
if($sql->rowCount() == 1){

    $_SESSION['login'] = true;
    $_SESSION['Home'] = true;
    $_SESSION['cadastro_cpf'] = $cadastro_cpf;
    $_SESSION['cadastro_senha'] = $cadastro_senha;
   
    $data = true;
}else{
    $data = false;
    session_destroy();
}

echo json_encode($data);

}


function Logout(){

    session_destroy();

    $data = true;

    echo json_encode($data);

}








?>