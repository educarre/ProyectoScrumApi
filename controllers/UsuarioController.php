<?php

require_once('../services/UsuarioService.php');

class UsuarioController{

    //???public $servicio; //objeto UsuarioService

    public static function getUsuario($correo){
        return json_encode(UsuarioService::getUsuario($correo));
    }

    public static function getUsuario(){
        return json_enconde(UsuarioService::getUsuario());
    }

    public static function crearUsuario($usuarioNuevo){//post
        $parseado = json_decode($usuarioNuevo);
        UsuarioService::postUsuario($parseado);
    }

    public static function actualizarUsuario($usuarioActualizado){//put: mismo json que post
        $parseado = json_decode($usuarioActualizado);
        UsuarioService::putUsuario($parseado);
    }

    public static function deleteUsuario($id){
        UsuarioService::deleteUsuario($id);
    }

    public static function loginUsuario($correo, $contrasena){
        UsuarioService::loginUsuario($correo, $contrasena);
    }

    public static function logoutUsuario(){
        UsuarioService::logoutUsuario();
    }

}

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        if(isset($_GET['correo'])){
            UsuarioController::getUsuario($_GET['correo']);
        }else{
            UsuarioController::getUsuario();
        }
        break;

    case 'POST':
        if(isset($_POST['usuarioNuevo'])){
            UsuarioController::crearUsuario($_POST['usuarioNuevo']);
        }else{
            echo "error";
        }
        break;

    case 'PUT':
        if(isset($_PUT['usuarioActualizado'])){
            UsuarioController::actualizarUsuario($_PUT['usuarioActualizado']);
        }else{
            echo "error";
        }
        break;

    case 'DELETE':
        if(isset($_DELETE['id'])){
            UsuarioController::deleteUsuario();
        }else{
            echo "error";
        }
        break;
}