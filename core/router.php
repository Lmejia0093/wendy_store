<?php

class router{
    public $uri;
    public $controller;
    public $method;
    public $param;

    public function __construct(){
     $this->seturi();
     $this->setcontroller();
     $this->setmethod();
     $this->setparam();
    }

    public function seturi(){
        $this->uri = explode('/',$_SERVER['REQUEST_URI']);
    }

    public function setcontroller(){
        $this->controller = $this->uri[3] === '' ? 'login' : $this->uri[3];
    }

    public function setmethod(){
        $this->method = !empty($this->uri[4]) ? $this->uri[4] : 'login_in';
    }

    public function setparam(){
        $this->param = !empty($this->uri[5]) ? $this->uri[5] : '';
    }

    public function geturi(){
        return $this->uri;
    }

    public function getcontroller(){
        return $this->controller;
    }

    public function getmethod(){
        return $this->method;
    }

    public function getparamd(){
        return $this->param;
    }
}