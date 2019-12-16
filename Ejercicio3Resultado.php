<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include("./conexion.php");
            $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
            $producto = mysqli_real_escape_string($con, $_POST["producto"]);
            $sql = "select cliente.nombre from cliente, producto, venta 
                where venta.cliente = cliente.cod_cliente and 
                venta.producto = producto.cod_producto and producto.nombre = ?";
            
            $stmt = mysqli_stmt_init($con);
            if(mysqli_stmt_prepare($stmt, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $producto);
                mysqli_stmt_execute($stmt);
                
                $nombrecliente="";
                mysqli_stmt_bind_result($stmt, $nombrecliente);
                while (mysqli_stmt_fetch($stmt)){
                    echo "el cliente que compro el ".$producto." se llama ".$nombrecliente."<br>";
                }
                mysqli_stmt_close($stmt);
            }
          
        ?>
    </body>
</html>
