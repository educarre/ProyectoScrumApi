<?php

require_once('../services/UsuarioService.php');

class UsuarioController{

    //???public $servicio; //objeto UsuarioService

    public function getUsuario($nombreUsuario){
        return json_encode(UsuarioService::getUsuario($nombreUsuario));
    }

    public function crearUsuario($json){//post
        $parseado = json_decode($json);
        UsuarioService::postUsuario($parseado);
    }

    public function actualizarUsuario($json){//put: mismo json que post
        $parseado = json_decode($json);
        UsuarioService::putUsuario($parseado);
    }

    public function deleteUsuario($id){
        UsuarioService::deleteUsuario($id);
    }

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            # code...
            break;

        case 'POST':
            # code...
            break;

        case 'PUT':
            # code...
            break;

        case 'DELETE':
            # code...
            break;
    }
}