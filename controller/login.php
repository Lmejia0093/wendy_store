<?php
include_once 'controller/inicio_admin.php';
include_once 'model/usuario_model.php';
include_once 'controller/session/user_session.php';



class login_controller  { 
    public $dato;
    


    public function __construct(){
        $ic =  new UserSession();
        $this->dato = new usuario(); 


    }

public function login_in(){
    require_once 'vista/login/login.php';
}


  
    
public function login_validar(){

    
        $user = new usuario();
        $user->usuario = $_POST['txtusuario'];
        $user->clave = $_POST['txtclave'];

        

       $valor = $this->dato->validar_usuario($user);
       

       if ($valor->conta !=0) {
        $valor= $this->dato->validar_clave($user);



        if ($valor->conta !=0) {
            $valor = $this->dato->validar_login($user);
            if ($valor->conta !=0) {

                $datos = new usuario();
                $datos->usuario = $_POST['txtusuario'];
                $datos->clave = $_POST['txtclave'];

     
                
               $info_user = $this->dato->llenar_usuario($datos);
               $cantidad_user = $this->dato->Cantidad_usuarios();


               foreach ($info_user as $key => $usuario) {
                   $_SESSION['user'] = $usuario->usuario;
                   $_SESSION['rol'] = $usuario->id_rol;
                   $_SESSION['nombre'] = $usuario->nombre;
                   $_SESSION['imagen'] = $usuario->imagen;
                   $_SESSION['nombre_rol'] = $usuario->nombre_rol;
                }
    
                    $user = $_SESSION['user'] ;
                   
                $seteo_user = new UserSession();
                $seteo_user->setuser($user);

                   
                  
                   if ( $_SESSION['rol'] == "1") {
                    
                   
                       
                        header('location: ?c=index');
                      //  require_once 'vista/menu_principal/encabezado.php';
                      //  require_once "vista/login/perfil.php";
                       // require_once 'vista/menu_principal/pie.php';
                 
                   }
                    else
                    {
                        header('location: ?c=user');
                    }
                

               

               }
    
              
        
                

                
                
            else {
                
         $mensaje2 = "La clave: "."<b style='color:brown'>".$user->clave."</b>"." ". "No existe en la base de datos";
         require_once "vista/login/login.php";
            }

         
     }else {
        
         $mensaje2 = "la clave: "."<b style='color:brown'>".$user->clave."</b>"." ". "No Coincide con el usuario";
         require_once "vista/login/login.php";
 
     }

       }else {
         
           $mensaje1 = "El usuario: "."<b style='color:brown'>".$user->usuario."</b>"." ". "No existe en la base de datos";
           require_once "vista/login/login.php";

       }

        
    }

  

   
}



?>