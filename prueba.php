<?php

       define("SERVER","localhost");         // Servidor de internet
       define("USER","azamorano");            // Usuario con el que se interactua
       define("PASSWORD","redes1");            // Password del user
       define("DATABASE","azamorano");        // Nombre de la base de datos del sistema

       $pServer = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);  // Conexión a la base de datos
       mysqli_query($pServer,"SET CHARACTER SET utf8");              // Consulta solo para cambiar el formato de presentaciòn de datos

       $IP=getenv(REMOTE_ADDR);  // Obtiene la ip del usuario

       $cadena = " insert into VISITAS (ip) values ('".$IP."');"; // Es la consulta para ingresar la visita
       $cadena = stripslashes($cadena); // Se limpia la cadena de valores
       $pConsulta = mysqli_query($pServer,$cadena); // Ejecutamos la consulta

       $cadena = " select * from visitas;"; // Es la consulta para contar las visitas
       $cadena = stripslashes($cadena); // limpiamos la cadena
       $pConsulta = mysqli_query($pServer,$cadena); // Ejectuamos la consulta
       $row_cnt = mysqli_num_rows($pConsulta); // Contamos las visitas

       echo "visitas : ",$row_cnt;   //Imprime el número de vistas contenido en la variable $row_cnt

     ?>