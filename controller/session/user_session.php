<?php

class UserSession{

    public function __construct(){
        session_set_cookie_params(60*60*24*10);
        session_start();
    }

    public function setuser($user){
       $_SESSION['user'] = $user;
    }

    public function getuser(){
        return $_SESSION['user'];
    }
   

    public function closeSession(){
        session_unset();
        session_destroy();
       
    }
}

?>