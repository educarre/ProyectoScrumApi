<?php
    class VideoService{
        public function getVideo(string $id) {
            return VideoModel::getVideo($id);
        }

        public function postVideo($valoracion) {
            return VideoModel::postVideo($valoracion);
        }

        public function putVideo($valoracion){ 
            return VideoModel::putVideo($valoracion);
        }

        public function deleteVideo($id) {
            return VideoModel::deleteVideo($id);
        }
        

    }
?>