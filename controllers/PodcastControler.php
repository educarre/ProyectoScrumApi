<?php

require_once('../services/PodcastService.php');

class PodcastController{

    //???public $servicio; //objeto PodcastService

    public function getPodcast($id){
        return json_encode(PodcastService::getPodcast($id));
    }

    public function getPodcastTags($tag){
        return json_encode(PodcastService::getPodcastTags($tag));
    }

    public function subirPodcast($json){//post
        $parseado = json_decode($json);
        PodcastService::postPodcast($parseado);
    }

    public function actualizarPodcast($json){//put: mismo json que post
        $parseado = json_decode($json);
        PodcastService::putPodcast($parseado);
    }

    public function deletePodcast($id){
        PodcastService::deletePodcast($id);
    }
}

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        if(isset($_GET['idPodcast'])){
            PodcastController::getPodcast($_GET['idPodcast']);
        }else if ($_GET['tag']){
            PodcastController::getPodcastTags($_GET['tag']);
        }
        break;

    case 'POST':
        if(isset($_POST['jsonPodcast'])){
            PodcastController::subirPodcast($_POST['jsonPodcast']);
        }else{
            echo "error";
        }
        break;

    case 'PUT':
        if(isset($_PUT['jsonPodcast'])){
            PodcastController::actualizarPodcast($_PUT['jsonPodcast']);
        }else{
            echo "error";
        }
        break;

    case 'DELETE':
        if(isset($_DELETE['id'])){
            PodcastController::deletePodcast();
        }else{
            echo "error";
        }
        break;
}
?>