<?php

    include('misfunciones.php');
    $mysqli = conectaBBDD(); 
    
    //leo los parámetros que me pasa el index.php
     $usuario_nombre = $_POST['usuario_nombre'];
     $usuario_clave = $_POST['usuario_clave'];


     //hago la consulta a la BBDD
     $resultado_consulta = $mysqli ->query("SELECT * FROM usuario where DNI = '$usuario_nombre' ");
     $numero_dnis = $resultado_consulta -> num_rows;
     //como sólo puede haber como mucho un DNI en este resultado porque el DNI es campo clave y no se puede repetir
     //lo pongo con un if; si no, se tiene que tratar todo el resultado de la query con un bucle for por ejemplo
     if ($numero_dnis > 0){
              //la query es válida y me ha devuelto por lo menos un dni
              //entonces mostraré el menú normal
              //voy a leer el campo DNI y el campo password de la BBDD
              $r = $resultado_consulta -> fetch_array(); 
              $DNI = $r['DNI'];
              $password = $r['password'];
              if ($usuario_clave == $password){
                  require 'menu_inicio.php';
              }
              else {
                  require 'mensaje_error.php';
              }
     }else{
         require 'mensaje_error.php';
     }
        ?>