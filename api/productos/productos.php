<?php
include_once '../../lib/db.php';

class Productos extends DB{

    function __construct(){
        parent::__construct();
    }

    public function get($id){
        $query = $this->connect()->prepare('SELECT producto_id, producto_nombre, producto_precio, descripcion, producto_foto, c.categoria_nombre FROM producto p, categoria c WHERE p.categoria_id=c.categoria_id AND producto_id = :id LIMIT 0,2');
        $query->execute(['id' => $id]);

        $row = $query->fetch();

        return [
                'id'            => $row['producto_id'],
                'nombre'        => $row['producto_nombre'],
                'precio'        => $row['producto_precio'],
                'descripcion'   => $row['descripcion'],
                'categoria'     => $row['c.categoria_nombre'],
                'imagen'        => $row['producto_foto']
                ];
    }

    public function getItemsByCategory($category){
        $query = $this->connect()->prepare('SELECT producto_id, producto_nombre, producto_precio, descripcion, producto_foto, c.categoria_nombre  FROM producto p, categoria c WHERE p.categoria_id=c.categoria_id AND categoria_nombre = :cat LIMIT 0,12');
        $query->execute(['cat' => $category]);
        $items = [];
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $item = [
                    'id'            => $row['producto_id'],
                    'nombre'        => $row['producto_nombre'],
                    'precio'        => $row['producto_precio'],
                    'descripcion'   => $row['descripcion'],
                    'categoria'     => $row['c.categoria_nombre'],
                    'imagen'        => $row['producto_foto']
                    ];
            array_push($items, $item);
        }
        return $items;
    }
}

?>