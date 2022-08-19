<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>build/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>build/login/css/owl.carousel.min.css">

    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>build/login/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>build/login/css/style.css">

    <title>Login </title>
  </head>
   
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="<?php $_SERVER['DOCUMENT_ROOT']?>build/login/images/login.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3><strong>Interwebs Corp.</strong></h3>
              <p class="mb-4">Rastreamento de Websites.</p>
            </div>
            <form action="#" method="post">
              <div class="form-group first">
                <input type="text" class="form-control" id="cadastro_cpf" placeholder="CPF : ">

              </div>
              <div class="form-group last mb-4">
                <input type="password" class="form-control" id="cadastro_senha"placeholder="SENHA :">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center"></div>

              <input  value="Login" id='login' class="btn text-white btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted"> Ainda Não Possui Cadastro?</span>
              <span class="d-block text-left my-4 text-muted"><a href="<?php echo INCLUDE_PATH;?>cadastro"> Cadastre-se!</a></span>
            </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>

  </div>

 <div id="pageMessages">

</div>

<script src="<?php $_SERVER['DOCUMENT_ROOT']?>node_modules/jquery/dist/jquery.min.js"></script>

<script src="<?php $_SERVER['DOCUMENT_ROOT']?>node_modules/@popperjs/core/dist/umd/popper.min.js"></script>

<script src="<?php $_SERVER['DOCUMENT_ROOT']?>vendors/bootstrap/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

<script src="<?php $_SERVER['DOCUMENT_ROOT']?>build/js/global.js"></script>

  </body>
</html>
