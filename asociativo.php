<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $datos= array("Nombre"=>"Juan","Apellidos"=>"García","Edad"=>21);//Crea un array asociativo
        $datos= array_merge($datos,array("Teléfono"=>954,"País"=>"España"));//Añade elementos al array
        //$datos["País"]="España";
        foreach ($datos as $clave=>$valor){
            echo "A $clave le corresponde $valor<br>";
        }
        echo"<br><br>";
        echo"<table border=1>";//Esto es lo mismo pero mostrando los valores en una tabla
        echo"<th>Concepto</th><th>Valor</th>";
        foreach ($datos as $clave=>$valor){
            echo "<tr><td>$clave</td><td>$valor</td></tr>";
        }
        echo"</table>";
        
        ?>
    </body>
</html>
