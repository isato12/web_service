<?php

// ESto es un a configuración para conexion a la base de datos lo manejamos por medio de una clase y unas funciones, nuestra clase se llama conexion y nuestras funciones se llaman Conecxion, set_names 
class Conectar
{

    protected $dbh;

    protected function Conexion()
    {
        try {
            $conectar = $this->dbh = new PDO('mysql:host=localhost;dbname=practica_webservice', 'root', '');
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
