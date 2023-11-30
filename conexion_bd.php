<?php 
$conexion=mysqli_connect("localhost", "root","", "contacto");
msql_set_charse($conexion,"utf8");






    if (!$conexion){
        echo "error en la conexion a la base de datos";
    }
    if(!$ejecutarInsertar){
    
        echo "error en SQL";
    
    }
    msqli_close($conexion);

?>