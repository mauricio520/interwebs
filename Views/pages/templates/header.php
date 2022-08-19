<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Interwebs Corp.</title>

   <link href="<?php $_SERVER['DOCUMENT_ROOT']?>vendors/bootstrap/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>vendors/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet">

    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>build/css/custom.min.css" rel="stylesheet">

    
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-link" aria-hidden="true"></i><span>Interwebs Corp.</span></a>
            </div>

            <div class="clearfix"></div>

    
            <div class="profile clearfix"style="padding-top: 2rem;">
              <div class="profile_pic">
                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>build/images/perfil.jpeg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>000.000.000-00</span>
                <h2>Maurício Silva</h2>
              </div>
              <div class="clearfix"></div>
            </div>

            <br />
     
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
             
                <ul class="nav side-menu">
                  <li><a href="<?php echo INCLUDE_PATH;?>home"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
                 
              </div>

            </div>
       
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout"  onClick="Logout()" >
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
    
          </div>
        </div>

        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a onClick="Logout()"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="menu-title">
      
              <a href="#" class="site_title"style="font-size: 15px;background-color: #334B66;"><i class="fa fa-file-text-o"></i> <span id="title_pages"></span></a>
           
          </div>
        </div>


 <div id="pageMessages"></div>

         

    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>node_modules/jquery/dist/jquery.min.js"></script>

    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
 
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>vendors/bootstrap/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>vendors/bootstrap-table/dist/bootstrap-table.min.js"></script>
    
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>node_modules/bootstrap-table/dist/locale/bootstrap-table-pt-BR.min.js"></script>
  
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>build/js/custom.min.js"></script>

    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>build/js/global.js"></script>

 
