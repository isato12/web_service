<?php
class Categoria extends Conectar
{
//con esta funcion obtenemos todos los registros de la tabla categoria y los guardamos en un array, necesitamos colocar los datos de la consulta en nuestra base de datos php my admin $sql = "SELECT * FROM tm_categoria WHERE estado = 1";
    public function get_categorias()
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM tm_categoria WHERE estado = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

//esta funcion obtenemos los registros por id, se le indica el numero y nos devolvera solo los datos pertenecientes a ese registro
     public function get_categoria_id($cat_id)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM tm_categoria WHERE estado = 1 AND cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    //Preparamos una funcion para insertar los datos en la tabla categoria $sql = "INSERT INTO tm_categoria (cat_id,cat_nombre,cat_observacion, estado) VALUES (NULL, ?, ?, '1');"; esto lo obtenemos insertando un registro en php my admin y colocando test en los registros de cat_nombre y cat_observacion y le damos continuar.
    public function insert_categoria($cat_nombre, $cat_observacion)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO tm_categoria (cat_id,cat_nombre,cat_observacion, estado) VALUES (NULL, ?, ?, '1');";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nombre);
        $sql->bindValue(2, $cat_observacion);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update_categoria($cat_id,$cat_nombre, $cat_observacion)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE tm_categoria set cat_nombre = ?,cat_observacion = ? where cat_id = ?;";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nombre);
        $sql->bindValue(2, $cat_observacion);
        $sql->bindValue(3, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete_categoria($cat_id)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE tm_categoria set estado = '0' WHERE cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
