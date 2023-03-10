<?php

require_once '../controllers/UsuarioModel.php';

class UsuarioService{

    public function getUsuario($correo){
        return UsuarioModel::leerUsuario($correo);
    }

    public function crearUsuario($usuarioNuevo){
        return UsuarioModel::insertar($usuarioNuevo);//devolverá un booleano
    }

    public function actualizarUsuario($usuarioActualizado){
        return UsuarioModel::actualizar($usuarioActualizado);
    }

    public function deleteUsuario($id){
        return UsuarioModel::eliminar($id);
    }

    public static function loginUsuario($correo, $contrasena){
        return UsuarioModel::loginUsuario($correo, $contrasena);
    }

    public static function logoutUsuario(){
        return UsuarioModel::logoutUsuario();
    }

    

}