<?php

include_once 'config/config.php';
include_once 'controller/session/user_session.php';
include_once 'controller/control.php';
include_once 'controller/login.php';


class main{

    
    
    public function iniciar(){
        
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
        $controller = new control();
        $controller_login = new login_controller();
       
        if (empty($user_logiado)) {
    
           $controller_login->login_in();
        }


        if ( empty($_REQUEST['c']) ) {
            $controller->index();
          
          
        }else {
            $action = $_REQUEST['c'];
          
            if (method_exists($controller,$action)) {
                call_user_func(array($controller,$action));
            }else {
                call_user_func(array($controller,"error"));
            };
        }
        
         
          
      
          
         
   
        }//fin funcion inicio
        
      

    }//fin de la clase
    


