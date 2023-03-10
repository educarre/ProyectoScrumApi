<?php
    class VideoService{
        public function getVideo(string $id) {
            return VideoModel::getVideo($id);
        }

        public function postVideo() {
            return VideoModel::postVideo();
        }

        public function putVideo(){ 
            return VideoModel::putVideo();
        }

        public function deleteVideo($id) {
            return VideoModel::deleteVideo($id);
        }
        

    }
?>