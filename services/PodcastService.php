<?php
    class PodcastServices{
        public function getPodcast($id){
            return PodcastModel::getPodcast($id);
        }

        public function postPodcast(){
            return PodcastModel::postPodcast();
        }

        public function getPodcast($tags){
            return PodcastModel::getPodcast($tags);
        }

        public function putPodcast(){ 

        }

        public function deletePodcast($id){
            return PodcastModel::deletePodcast($id);
        }
        

    }
?>