<?php 

class pedido{

    public $con;
  
    


    public function __construct(){
    try {
        $this->con = conexion::conectar();
    } catch (Exception $e) {
        die($e->getMessage());
    }
         
    }



    public function listar_ordenes(){
        try{
            $query = "SELECT * FROM ordenes";
            $smt = $this->con->prepare($query);
            $smt->execute();
            return $smt->fetchall(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }
    }

    public function categoria_insertar(pedido $data){
        try{
            $query = "INSERT INTO categoria(nombre,detalle,estado) VALUES (?,?,?)";
            $this->con->prepare($query)->execute(array($data->nombre,$data->detalle,$data->estado));
            
          //  return $smt->fetchall(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }
    }

    public function categoria_actualizar($data){
        try{
            $query = "UPDATE categoria SET nombre=?,detalle=? WHERE id_categoria=?";
            $this->con->prepare($query)->execute(array($data->nombre,$data->detalle,$data->id_categoria));
            
          //  return $smt->fetchall(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }
    }

    public function llenar_categoria($id){
        try{
            $query = "SELECT * FROM categoria WHERE id_categoria=?";
         $smt =   $this->con->prepare($query);
         $smt->execute(array($id));   
         return $smt->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
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
            $query = "SELECT id_user,id_rol,usuario FROM db_usuario WHERE usuario=? AND clave=?";
         $smt =   $this->con->prepare($query);
         $smt->execute(array($data->$usuario,$data->clave));   
         return $smt->fetch(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }

    }

    public function delete_categoria($id){
        try{
            $query = "DELETE FROM categoria WHERE id_categoria=?";
            $this->con->prepare($query)->execute(array($id));
            
          //  return $smt->fetchall(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }

    }
}
?>