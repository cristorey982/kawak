<?php

  class Conectar
  {
   public static function con(){

    $hostname_db = "localhost";
    $database_db = "kawak";
    $username_db = "root";
    $password_db = "";
    //Conectar a la base de datos
    $conexion = mysqli_connect($hostname_db, $username_db, $password_db);

    //Conexion a la base de datos web
    //$database_db = "gnfeduco_colegiognf";
    //$conexion = mysqli_connect('localhost','gnfeduco_admin','admin','gnfeduco_colegiognf');
    //echo 'Conexion Exitosa';

    //Seleccionar la base de datos
    mysqli_select_db($conexion,$database_db) or die ("Ninguna DB seleccionada");

    return $conexion;
  } 
}
