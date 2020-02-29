<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../CSS/style.css">
        <script src="../JS/js.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        
        <h1>Listado de personas</h1>
        
        <div id="TablaListP">
        
            <?php
            include '../Modelos/Persona.php';
            $personas = Persona::Mostrar_Persona();
            //var_dump($personas);
            if ($personas == NULL) {
                echo "<h1> No hay Personas en el listado </h1>";
            } else {

                echo" <table> <tr> <th>Nombre</th> <th>Apellido</th> <th>CI</th> <th>telfono</th> <th>Edad</th>  </tr>";
                foreach ($personas as $persona) {
                    //  var_dump($persona);
                    echo " <tr><td> $persona->Nombre </td>
                        <td> $persona->Apellidos </td>
                        <td> $persona->Ci </td> 
                        <td>$persona->Telefono</td> 
                        <td>$persona->Edad</td> </tr>";
                }
                echo" </table>";
            }
            ?>
         
        </div>
        <a href="./index.html"> Inicio</a> 
    </body>
</html>
