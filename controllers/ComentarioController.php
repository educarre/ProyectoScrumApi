<?php

require_once('../services/ComentarioService.php');

class ComentarioController{

    //???public $servicio; //objeto ComentarioService

    public function getComentario($id){
        return json_encode(ComentarioService::getComentario($id));
    }

    public function guardarComentario($json){//post
        $parseado = json_decode($json);
        ComentarioService::postComentario($parseado);
    }

    public function actualizarComentario($json){//put: mismo json que post
        $parseado = json_decode($json);
        ComentarioService::putComentario($parseado);
    }

    public function deleteComentario($id){
        ComentarioService::deleteComentario($id);
    }

    
}