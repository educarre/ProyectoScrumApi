<?php

require_once 'Conexion.php';

class UsuarioModel {

    public static function leer($correo){//hay que meter nombre en la BD
        $arrayExecute = array('correo' => $correo);
        Conexion::listarPorCampo('usuario', "WHERE correo = :correo", $arrayExecute);
    }

    public static function insertar($correo, $contrasena, $tipo, $descripcion){
        if(self::usuarioExiste($correo, false)){ //de este modo, no se podrán repetir los correos
            //$conexion = new Conexion();
            $nombresCampos = 'correo, contrasena, tipo, descripcion';
            $valoresCampos = ":correo, :contrasena, :tipo, :descripcion";
            $arrayExecute = array('correo' => $correo, 'contrasena' => $contrasena, 'tipo' => $tipo, 'descripcion' => $descripcion);
            
            Conexion::insertar('usuario', $nombresCampos, $valoresCampos, $arrayExecute);

            return true;
        }else{
            return false;
        }
    }


    /**
     * Función cuyo objetivo es eliminar al usuario de la BD llamando a la
     * función eliminar() de la clase Conexion
     * 
     * @author Aleksandra Hodur
     */
    public static function eliminar(){
        //$conexion = new Conexion();
        Conexion::eliminar('usuario', $this->getId());
    }

    /**
     * Función cuyo objetivo es actualizar el usuario en la BD llamando a la función
     * actualizar() de la clase Conexion. Seguidamente, comprueba el nombre del campo,
     * y actualiza su atributo correspondiente en el objeto
     * 
     * @author Aleksandra
     * @param string $nombreCampo nombre del campo que se desea cambiar
     * @param string $valorCampo valor nuevo que se le desea asignar al campo
     * 
     */
    public function static actualizar($nombreCampo, $valorCampo){
        //$conexion = new Conexion();
        Conexion::actualizar('usuario', $this->getId(), $nombreCampo, $valorCampo);
    }

    /** 
     * @author Rubén Torres y Aleksandra Hodur
    */
    /**
     * Summary of UsuarioExiste
     * @param string $correo
     * @param string/bool $contrasena si es un booleano false, se realiza la búsqueda sin contrasena
     * @return bool
     */
    /**
     *con la función usuario existe llamamos al método estático leer que está en conexión para comprobar que esté dentro de la bdd
     */
    public static function usuarioExiste($correo, $contrasena) {
        //$conexion = new Conexion();

        if($contrasena){
            $condiciones = 'correo = :correo AND contrasena = :contrasena';
            $arrayExecute = array("correo" => $correo, "contrasena" => $contrasena);
        }else{
            $condiciones = 'correo = :correo';
            $arrayExecute = array("correo" => $correo);
        }

        $id = Conexion::buscarId('usuario', $condiciones, $arrayExecute);

        if($id < 0) {
            //echo "Usuario no existe";
            return false;
        } else {
            //echo "Se ha encontrado $id Id";
            return true;
        }
    }

}
    
?>