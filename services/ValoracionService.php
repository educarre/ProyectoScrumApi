<?php
    class ValoracionService{
        public function getValoracion(string $id) {
            return ValoracionModel::getValoracion($id);
        }

        public function postValoracion() {
            return ValoracionModel::postValoracion();
        }

        public function putValoracion(){ 
            return ValoracionModel::putValoracion();
        }

        public function deleteValoracion($id) {
            return ValoracionModel::deleteValoracion($id);
        }
        

    }
?>