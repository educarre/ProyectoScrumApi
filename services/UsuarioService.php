<?php

require_once '../controllers/UsuarioModel.php';

class UsuarioService{

    public function getUsuario($correo){
        return UsuarioModel::leerUsuario($correo);
    }

    public function crearUsuario(){
        UsuarioModel::insertar();
    }

    public function actualizarUsuario(){

    }

    public function deleteUsuario(){
        
    }

    

}