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
            $usuario = $_POST["usuario"];
            $password = $_POST["psswrd"];
            
            echo 'El usuario es '.$usuario.' y la contraseña es '.$password.'<br>'
                    .'Mi nombre es '.$_GET["nombre"];
            
        ?>
        <form action="moto.php">
            <button type="submit">Ejercicio 2</button>
        </form>
    </body>
</html>
