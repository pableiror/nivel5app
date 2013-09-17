<?php
$user=$_GET ['user'];
$clave=$_GET ['pass'];

if ($user== 'juan'  && $clave == '1234') {
	echo "Binvenidos $user";
} else {
	include ("index.html");
} 
?>  