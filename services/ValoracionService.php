<?php
    class ValoracionService{
        public function getValoracion(string $id) {
            return ValoracionModel::getValoracion($id);
        }

        public function postValoracion($valoracion) {
            return ValoracionModel::postValoracion($valoracion);
        }

        public function putValoracion($valoracion){ 
            return ValoracionModel::putValoracion($valoracion);
        }

        public function deleteValoracion($id) {
            return ValoracionModel::deleteValoracion($id);
        }
        

    }
?>