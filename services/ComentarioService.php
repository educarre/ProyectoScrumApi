<?php

class PodcastService{
    public function getComentario($id) {
        return PodcastModel::getComentario($id);
    }

    public function postComentario() {
        return PodcastModel::postComentario();
    }

    public function putComentario($comentario){ 
        return PodcastModel::putPodcast($comentario);
    }

    public function deleteComentario($id) {
        return PodcastModel::deleteComentario($id);
    }
    

}



?>