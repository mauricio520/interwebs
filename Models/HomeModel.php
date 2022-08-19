<?php

include ($_SERVER['DOCUMENT_ROOT'].'/mvc_php/Database.php');

$action = $_POST['action'];

switch ($action) {
    case 'consultar'   :    consultar();    break;
    case 'adicionar'   :    adicionar();    break;
    case 'editar'      :    editar();       break;
    case 'excluir'     :    excluir();      break;
    case 'consultar_url':    consultar_url(); break;
}


function  consultar(){

$odbc = new Database();

$sql = $odbc->conect()->prepare("SELECT url_id,url_nome FROM url WHERE url_status = 1 ORDER BY url_id DESC");
$sql->execute();
$data = $sql->fetchAll();

for ($i=0; $i <count($data); $i++) { 

$data[$i]['nome'] = $data[$i]['url_nome'];
$data[$i]['id'] = $data[$i]['url_id'];
$data[$i]['action'] = btnacao($data[$i]['id']);

}

echo json_encode($data);
}

function btnacao($id) {
ob_start();
?>
  <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar" type="button" onclick="modaleditar( <?=$id?> )"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
  </a> 
  <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="Excluir" type="button" onclick="modalexcluir( <?=$id?> )"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" style="color:red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
    </svg>
  </a> 
<?php
return ob_get_clean();
}





function adicionar(){

$nome = $_POST['url_name'];

$odbc = new Database();

$sql = $odbc->conect()->prepare("INSERT INTO url (url_nome,url_status) VALUES('$nome',1)");
$sql->execute();

echo json_encode('adicionado');

}



function editar(){

$nome = $_POST['url_name'];
$safe = $_POST['safe'];

$odbc = new Database();

$sql = $odbc->conect()->prepare("UPDATE url SET url_nome = '$nome' WHERE url_id = $safe;");
$sql->execute();

echo json_encode('editado');

}




function excluir(){

$safe = $_POST['safe_excluir'];

$odbc = new Database();

$sql = $odbc->conect()->prepare("UPDATE url SET url_status = 0 WHERE url_id = $safe;");
$sql->execute();

echo json_encode('excluido');

}





function consultar_url(){

$odbc = new Database();

$id_row = $_POST['id_row'];

$sql = $odbc->conect()->prepare("SELECT url_nome FROM url WHERE url_id = $id_row ");
$sql->execute();
$data = $sql->fetchAll();

for ($i=0; $i <count($data); $i++) { 

$url  = $data[$i]['url_nome'];

}

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_MAXREDIRS, 4);
  curl_setopt($ch, CURLOPT_FORBID_REUSE, true);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FILETIME, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  

  $response = curl_exec($ch);

  global $base_url; 
  $base_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
  $http_response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  $time = curl_getinfo($ch, CURLINFO_FILETIME);
  curl_close ($ch);

  $http_time =  date("Y-m-d H:i:s", $time);

  $html = htmlentities($response);

echo json_encode(array('data'=>$html,'code'=>$http_response_code,'time'=>$http_time));

}





?>