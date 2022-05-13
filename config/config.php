<?php

class conexion{

   


    public static function conectar(){
       $PDO = new PDO("mysql:host=localhost;dbname=mvc;charset=utf8","root","123456");
      //  $PDO = new PDO("mysql:host=localhost;dbname=id17132632_tienda_db;charset=utf8","id17132632_tienda_user","KC5Zy-kY}Ke\iy#9");
        $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $PDO;
    }
}





?>