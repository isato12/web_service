<?php

// ESto es un a configuración para conexion a la base de datos lo manejamos por medio de una clase y unas funciones, nuestra clase se llama conexion y nuestras funciones se llaman Conecxion, set_names 
class Conectar
{

    protected $dbh;

    protected function Conexion()
    {
        try {
            //ruta para trabajar en local
            // $conectar = $this->dbh = new PDO('mysql:host=localhost;dbname=practica_webservice', 'root', '');
            //ruta heroku o cualquier hosting que manejes, se cambia datos del servidor contratado
            $conectar = $this->dbh = new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_6931ee3c548073d', 'b03e3c39b86091', 'f7a11f23');
            return $conectar;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }
    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}
