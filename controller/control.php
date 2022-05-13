<?php
include_once 'controller/vistacontroller.php';
//include_once 'model/usuario_model.php';
include_once 'model/articulo.php';
include_once 'controller/login.php';


include_once 'controller/session/user_session.php';



class control extends vistacontroller{ 
    public $dato;
    public $dato_session;
    
    
    public function __construct(){
        
        $this->dato = new articulo(); 
        $this->dato_session = new UserSession(); 
        
        
    }

    
    public function ventaspdf(){
        // require_once 'vista/menu_principal/encabezado.php';
         require_once "vista/ventas/reporteventas.pdf";
       //  require_once 'vista/menu_principal/pie.php';

}
 
    
    public function vista_login(){
        $login = new login_controller();
        $login->login_in();
    }

    public function cerrar_session(){
        $ic = new UserSession();  
        $ic->closeSession();
        $this->vista_login();

    }

  

    //valida el login del sistema
    
    public function validar(){

        $login = new login_controller();
        $login->login_validar();
        
        
    }



    public function index(){

        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
           $this->vista_login();
          
       
        }else {
            echo $user_logiado;
           $this->vista_index();
        }
        
        
    }


    public function perfil_user(){
      
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            
            $this->vista_login();
       
        }else {
           
            require_once 'vista/menu_principal/encabezado.php';
            require_once "vista/login/perfil.php";
            require_once 'vista/menu_principal/pie.php';
        }
        
       

    }
    
 
    
    public function detalle_producto(){

        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            $this->vista_login();
       
        }else {
            
            
            require_once 'vista/menu_principal/encabezado.php';
            require_once "vista/detalle_producto.php";
            require_once 'vista/menu_principal/pie.php';
        }
    }

  

    public function orden_nueva(){
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            $this->vista_login();
       
        }else {

        require_once 'vista/menu_principal/encabezado.php';

        $edit = new articulo();

        if (isset($_REQUEST['id']) ) {
            $edit = $this->dato->llenar_categoria($_REQUEST['id']);
            
        }
        
        require_once "vista/ordenes/orden_nueva.php";
        require_once 'vista/menu_principal/pie.php';
    }}

    public function orden_detalle(){
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            $this->vista_login();
       
        }else {
            $TITULO = "Ordenes";
            $this->vista_ordenes();
           
        
    }}

    public function categoria(){
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            $this->vista_login();
       
        }else {
        $TITULO = "Categorias";
        require_once 'vista/menu_principal/encabezado.php';
        require_once "vista/categoria/categoria_detalle.php";
        require_once 'vista/menu_principal/pie.php';
    }}


    public function categoria_nueva(){
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            $this->vista_login();
       
        }else {

        require_once 'vista/menu_principal/encabezado.php';

        $edit = new articulo();

        if (isset($_REQUEST['id']) ) {
            $edit = $this->dato->llenar_categoria($_REQUEST['id']);
            
        }
        
        require_once "vista/categoria/categoria_insertar.php";
        require_once 'vista/menu_principal/pie.php';
    }
    }
    
    public function categoria_guardar(){
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            $this->vista_login();
       
        }else {
      $alm = new articulo();
      $alm->id_categoria = $_POST['id_categoria'];
      $alm->nombre = $_POST['categoria_nombre'];
      $alm->detalle = $_POST['categoria_detalle'];
      $alm->estado = 1;

      $alm->id_categoria > 0 ?  $this->dato->categoria_actualizar($alm) :  $this->dato->categoria_insertar($alm);
      
      
       $this->categoria();
    }}
   

    public function elimiar_categoria(){
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            $this->vista_login();
       
        }else {
        $this->dato->delete_categoria($_REQUEST['id']);
        $this->categoria();
    }}


    public function articulos(){
        $ic = new UserSession();  
        $user_logiado = $ic->getuser();
       
        if (empty($user_logiado)) {
            $this->vista_login();
       
        }else {
        require_once 'vista/menu_principal/encabezado.php';
        require_once "vista/articulo.php";
        require_once 'vista/menu_principal/pie.php';
    }}


    public function error(){
      require_once 'vista/menu_principal/encabezado.php';
        require_once "vista/error.php";
      require_once 'vista/menu_principal/pie.php';
    }
}



?>