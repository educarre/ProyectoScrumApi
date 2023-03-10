<?php
    class PodcastService{
        public function getPodcast(string $id) {
            return PodcastModel::getPodcast($id);
        }

        public function postPodcast() {
            return PodcastModel::postPodcast();
        }

        public function getPodcast(array $tags) {
            return PodcastModel::getPodcast($tags);
        }

        public function putPodcast(){ 
            return PodcastModel::putPodcast();
        }

        public function deletePodcast($id) {
            return PodcastModel::deletePodcast($id);
        }
        

    }
?>