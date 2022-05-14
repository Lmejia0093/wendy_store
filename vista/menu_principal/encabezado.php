


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <title>   <?php echo $TITULO ?>   </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">


   <!-- IonIcons -->
   <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vista/menu_principal/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/menu_principal/dist/css/adminlte.min.css">


  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>

  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
  
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="?c=perfil_user" >
          <i class="far fa-user"></i>
          
          <?php
       //  session_start();
          echo  $_SESSION['nombre']; ?>
          
        </a>
    
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?c=index" class="brand-link">
      <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">sistema x</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $_SESSION['imagen']   ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="?c=perfil_user" class="d-block"><?php echo  $_SESSION['nombre']; ?></a>
        </div>
      </div>

    <?php include_once 'menu_principal.php'; ?>
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
