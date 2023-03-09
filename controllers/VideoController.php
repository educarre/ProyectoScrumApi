<?php

require_once('../services/VideoService.php');

class VideoController{

    //???public $servicio; //objeto VideoService

    public function getVideo($id){
        return json_encode(VideoService::getVideo($id));
    }

    public function guardarVideo($json){//post
        $parseado = json_decode($json);
        VideoService::postVideo($parseado);
    }

    public function actualizarVideo($json){//put: mismo json que post
        $parseado = json_decode($json);
        VideoService::putVideo($parseado);
    }

    public function deleteVideo($id){
        VideoService::deleteVideo($id);
    }

}