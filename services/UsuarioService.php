<?php

require_once '../controllers/UsuarioModel.php';

class UsuarioService{

    public function getUsuario($correo){
        return UsuarioModel::leerUsuario($correo);
    }

    public function crearUsuario($usuarioNuevo){
        return UsuarioModel::insertar($usuarioNuevo);//devolverá un booleano
    }

    public function actualizarUsuario(){
        return UsuarioModel::actualizar($usuarioActualizado);
    }

    public function deleteUsuario($id){
        return UsuarioModel::eliminar($id);
    }

    

}