<?php

require_once('../services/UsuarioService.php');

class UsuarioController{

    //???public $servicio; //objeto UsuarioService

    public static function getUsuario($correo){
        return json_encode(UsuarioService::getUsuario($correo));
    }

    public static function crearUsuario($usuarioNuevo){//post
        $parseado = json_decode($usuarioNuevo);
        UsuarioService::postUsuario($parseado);
    }

    public static function actualizarUsuario($jsonUsuario){//put: mismo json que post
        $parseado = json_decode($jsonUsuario);
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
        if(isset($_GET['nombreUsuario'])){
            UsuarioController::getUsuario($_GET['nombreUsuario']);
        }else{
            echo "error";
        }
        break;

    case 'POST':
        if(isset($_POST['jsonUsuario'])){
            UsuarioController::crearUsuario($_POST['jsonUsuario']);
        }else{
            echo "error";
        }
        break;

    case 'PUT':
        if(isset($_PUT['jsonUsuario'])){
            UsuarioController::actualizarUsuario($_PUT['jsonUsuario']);
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