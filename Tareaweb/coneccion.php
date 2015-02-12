<?php
//Datos para conexión//
$host="localhost";
$user="root";
$password="";
$db="taller"; // el nombre de la base de datos que se creo, osea notas.
//Creo una variable conexión//
$con=mysqli_connect($host,$user,$password)or die("problemas al conectar");
//Selecciono la base de datos//
mysqli_select_db($con,$db)or die("probelmas al seleccionar la base de datos");
?>