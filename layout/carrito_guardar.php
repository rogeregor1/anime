<?php
	require_once "./inc/session_start.php";

	require_once "./php/main.php";

	/*== Almacenando datos ==*/
    $usuario=limpiar_cadena($_POST['usuario_usuario']);

	$codigo=limpiar_cadena($_POST['producto_id']);
	$prod=limpiar_cadena($_POST['producto_nombre']);
	$precio_parcial=limpiar_cadena($_POST['precio_parcial']);
    $unidades=limpiar_cadena($_POST['unidades']);

	$precio_total=limpiar_cadena($_POST['precio_total']);


	/*== Verificando campos obligatorios ==*/
    if($usuario=="" || $codigo=="" || $prod=="" || $unidades=="" || $precio_parcial=="" || $precio_total==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }
   

    /*== incluyendo conexion a db ==*/
   $guardar_carrito = conexion();
   
   /*== Guardando datos ==*/
   
       
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $producto_id = $_POST["producto_id"];
   
        // Insertar el producto en la tabla del carrito
        $sql_insert = "INSERT INTO cesta (producto_id) VALUES ($usuario,$codigo,$prod,$unidades,$precio_parcial,$precio_total)";
        if ($guardar_carrito->query($sql_insert) === TRUE) {
           echo '
               <div class="notification is-info is-light">
                   <strong>¡USUARIO REGISTRADO!</strong><br>
                   El carrito se registro con exito
               </div>
           ';
        } else {
           echo '
               <div class="notification is-danger is-light">
                   <strong>¡Ocurrio un error inesperado!</strong><br>
                   No se pudo registrar el carrito, por favor intente nuevamente
               </div>
           ';
        }
    }
      
?>