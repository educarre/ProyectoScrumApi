<?php

require_once('../model/ComentarioService.php');

class PodcastService{
    public function getComentario($id) {
        return PodcastModel::getComentario($id);
    }

    public function postComentario($comentario) {
        return PodcastModel::postComentario($comentario);
    }

    public function putComentario($comentario){ 
        return PodcastModel::putPodcast($comentario);
    }

    public function deleteComentario($id) {
        return PodcastModel::deleteComentario($id);
    }
    

}



?>