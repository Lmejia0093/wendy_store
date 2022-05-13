<?php

//require_once "model/database.php";
//require_once "../model/database.php";

if (!isset($_GET['c'])) {
   require_once 'inicio.controlador.php';
   $controlador = new Iniciocontrolador();
   call_user_func(array($controlador,"inicio"));

 


    
}else {
    $controlador = $_GET['c'];
    require_once "$controlador.controlador.php";
    $controlador = ucwords($controlador)."controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['a'])? $_GET['a'] : "inicio";

    if (method_exists($controlador,$accion)) {
      call_user_func(array($controlador,$accion));
    }else {
      call_user_func(array($controlador,"inicio"));
    }
    

   
}