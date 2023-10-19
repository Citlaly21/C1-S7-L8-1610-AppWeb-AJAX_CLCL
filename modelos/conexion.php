<?php 

class Conexion {

    static public function conectar(){
        $link = new PDO("mysql:host=localhost:3308; dbname=web-4b_clcl", "root", "122333");
        
        $link->exec("set names utf8");

        return $link;
    }
}

?>