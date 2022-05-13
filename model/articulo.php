<?php 

class articulo{

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


    public function listar(){
        try{
            $query = "SELECT id_articulo,nombrearticulo,precio,mensaje,paisorigen FROM articulos ";
            $smt = $this->con->prepare($query);
            $smt->execute();
            return $smt->fetchall(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }
    }

    public function listar_categoria(){
        try{
            $query = "SELECT * FROM categoria";
            $smt = $this->con->prepare($query);
            $smt->execute();
            return $smt->fetchall(PDO::FETCH_OBJ);

        } catch (Exception $e) 
        {
        die($e->getMessage());
        }
    }

    public function categoria_insertar(articulo $data){
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