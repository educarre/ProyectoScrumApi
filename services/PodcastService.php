<?php
    class PodcastService{
        public function getPodcast($id) {
            return PodcastModel::getPodcast($id);
        }

        public function postPodcast($comentario) {
            return PodcastModel::postPodcast($comentario);
        }

        public function getPodcast($tags) {
            return PodcastModel::getPodcast($tags);
        }

        public function putPodcast($comentario){ 
            return PodcastModel::putPodcast($comentario);
        }

        public function deletePodcast($id) {
            return PodcastModel::deletePodcast($id);
        }
        

    }
?>