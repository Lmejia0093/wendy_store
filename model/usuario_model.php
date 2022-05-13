<?php 


class usuario{

    public $con;
    public $nombre;
    public $detalle;
    public $estado;
    public $id_categoria;

    public $usuario;
    public $clave;
    public $id_rol;
    


    public function __construct(){
    try {
        $this->con = conexion::conectar();
    } catch (Exception $e) {
        die($e->getMessage());
    }
         
    }



    public function validar_login($data){
        try{
            $query = "SELECT count(*) conta FROM db_usuario WHERE usuario=? AND clave=? ";
         $smt =   $this->con->prepare($query);
         $smt->execute(array($data->usuario,$data->clave));   
         return $smt->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }

    }

    public function validar_usuario($data){
        try{
            $query = "SELECT count(*) conta FROM db_usuario WHERE usuario=?";
         $smt =   $this->con->prepare($query);
         $smt->execute(array($data->usuario));   
         return $smt->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }

    }

    public function validar_clave($data){
        try{
            $query = "SELECT count(*) conta FROM db_usuario WHERE clave=?";
         $smt =   $this->con->prepare($query);
         $smt->execute(array($data->clave));   
         return $smt->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }

    }

    public function llenar_usuario($data){
        try{
            $query = "SELECT id_user,id_rol,usuario,nombre,imagen,nombre_rol FROM db_usuario Where usuario =?";
            $smt =   $this->con->prepare($query);
            $smt->execute(array($data->usuario));   
            return $smt->fetchall(PDO::FETCH_OBJ);       

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }

    }

    public function Cantidad_usuarios(){
        try{
            $query = "SELECT COUNT(usuario) as cantidad FROM db_usuario";
            $smt =   $this->con->prepare($query);
            $smt->execute();   
            return $smt->fetch(PDO::FETCH_OBJ);       

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }

    }

  




}
?>