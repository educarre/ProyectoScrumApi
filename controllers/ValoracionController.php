<?php

require_once('../services/ValoracionService.php');

class ValoracionController{

    //???public $servicio; //objeto ValoracionService

    public function getValoracion($id){
        return json_encode(ValoracionService::getValoracion($id));
    }

    public function guardarValoracion($json){//post
        $parseado = json_decode($json);
        ValoracionService::postValoracion($parseado);
    }

    public function actualizarValoracion($json){//put: mismo json que post
        $parseado = json_decode($json);
        ValoracionService::putValoracion($parseado);
    }

    public function deleteValoracion($id){
        ValoracionService::deleteValoracion($id);
    }

    
}