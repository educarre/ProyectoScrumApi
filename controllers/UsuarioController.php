<?php

require_once('../services/UsuarioService.php');

class UsuarioController{

    //???public $servicio; //objeto UsuarioService

    public static function getUsuario($nombreUsuario){
        return json_encode(UsuarioService::getUsuario($nombreUsuario));
    }

    public static function crearUsuario($jsonUsuario){//post
        $parseado = json_decode($jsonUsuario);
        UsuarioService::postUsuario($parseado);
    }

    public static function actualizarUsuario($jsonUsuario){//put: mismo json que post
        $parseado = json_decode($jsonUsuario);
        UsuarioService::putUsuario($parseado);
    }

    public static function deleteUsuario($id){
        UsuarioService::deleteUsuario($id);
    }

    public static function loginUsuario($nombreUsuario, $contrasena){
        UsuarioService::loginUsuario($nombreUsuario, $contrasena);
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