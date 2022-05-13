<?php
include_once 'controller/vistacontroller.php';
include_once 'model/pedido.php';

class Ordenes { 
    public $dato;
    


    public function __construct(){
        $this->dato = new pedido(); 


    }

   
  

  


    public function pedido_mostrar(){

        require_once 'vista/menu_principal/encabezado.php';

        $edit = new pedido();

        if (isset($_REQUEST['id']) ) {
            $edit = $this->dato->llenar_pedido($_REQUEST['id']);
            
        }
        
        require_once "vista/categoria/categoria_insertar.php";
        require_once 'vista/menu_principal/pie.php';
    }


    
    public function categoria_guardar(){
      $alm = new articulo();
      $alm->id_categoria = $_POST['id_categoria'];
      $alm->nombre = $_POST['categoria_nombre'];
      $alm->detalle = $_POST['categoria_detalle'];
      $alm->estado = 1;

      $alm->id_categoria > 0 ?  $this->dato->categoria_actualizar($alm) :  $this->dato->categoria_insertar($alm);
      
       $this->categoria();
    }
   

    public function elimiar_categoria(){
        $this->dato->delete_categoria($_REQUEST['id']);
        $this->categoria();
    }


   
}



?>