<?php
    class PodcastService{
        public function getPodcast(string $id) {
            return PodcastModel::getPodcast($id);
        }

        public function postPodcast() {
            return PodcastModel::postPodcast();
        }

        public function getPodcastTags(array $tags) {
            return PodcastModel::getPodcastByTags($tags);
        }

        public function putPodcast(){ 
            return PodcastModel::putPodcast();
        }

        public function deletePodcast($id) {
            return PodcastModel::deletePodcast($id);
        }
        

    }
?>