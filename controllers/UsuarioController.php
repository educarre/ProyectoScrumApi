<?php

require_once('../services/UsuarioService.php');

class UsuarioController{

    //???public $servicio; //objeto UsuarioService

    public function getUsuario($id){
        return json_encode(UsuarioService::getUsuario($id));
    }

    public function postUsuario($json){
        $parseado = json_decode($json);
        UsuarioService::postUsuario($parseado);
    }

    public function putUsuario($json){//mismo json que post
        $parseado = json_decode($json);
        UsuarioService::putUsuario($parseado);
    }

    public function deleteUsuario($id){
        UsuarioService::deleteUsuario($id);
    }
}