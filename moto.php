<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>

        <?php
        error_reporting(E_ERROR);
        if (isset($_GET["piloto"])){
            
            $clasificacion = [
                "Rossi" => 312,
                "Lorenzo" => 305,
                "Marquez" => 222,
                "Pedrosa" => 190
            ];
            if($clave = $_GET["piloto"]){
                echo "el piloto que antes tenía ".$clasificacion[$_GET["piloto"]]." puntos";
                $clasificacion[$_GET["piloto"]] = $_GET["puntos"];   
                echo " ahora tiene ".($clasificacion[$_GET["piloto"]]);
                echo "<br>";
            }
            while (list($clave, $valor) = each($clasificacion)){
                $cadena = $clave." ".$valor."<br>";
                echo $cadena;
            }
                
                    
                
                
            
            
        }
        else{
            $clasificacion = [
                "Rossi" => 312,
                "Lorenzo" => 305,
                "Marquez" => 222,
                "Pedrosa" => 190
            ];
            while (list($clave, $valor) = each($clasificacion)){
                $cadena = $clave." ".$valor."<br>";
                echo $cadena;
            }
        }
        
        ?>
        <form action="moto.php" method="GET">
            <input name="piloto" placeholder="piloto">
            <input name="puntos" placeholder="puntos">
            <button type="submit">Actualizar</button>
        </form>
        <form action="ejercicio3.php">
            <button type="submit">Ejercicio 3</button>
        </form>
    </body>
</html>
