<?php 
  include_once 'model/pedidos.php';
class vistacontroller {
    public $pedido;

    public function __construct(){
       // session_start();
        $this->pedido = new pedido(); 

    }



    public function vista_index(){

        
        $TITULO = "Vista/admin";
       
        
        
        require_once 'vista/menu_principal/encabezado.php';
        require_once "vista/ventas/vista_ventas.php";
        require_once 'vista/menu_principal/pie.php';

       }

       public function vista_user(){

        
        $TITULO = "Vista/User";
       
        
        
        require_once 'vista/menu_principal/encabezado.php';
        require_once "vista/login/chat.php";
        require_once 'vista/menu_principal/pie.php';

       }



public function vista_ordenes(){
       $TITULO = "Ordenes";
       require_once 'vista/menu_principal/encabezado.php';
        require_once "vista/ordenes/orden_detalle.php";
        require_once 'vista/menu_principal/pie.php';
}

    

   

    
    
}
