<?php

include "conexion.php";

$Clave_del_Negocio=$_POST["clan"];
$Nombre_del_Negocio=$_POST["nom"];
$Direccion=$_POST["dic"];
$Telefono=$_POST["tel"];
$RFC=$_POST["rfc"];
$Email=$_POST["corr"];
$Clasificaci�n=$_POST["clas"];
$Coordenadas=$_POST["coor"];
$Latitud=$_POST["lad"];
$Longitud=$_POST["long"];

$sql="INSERT INTO negocio (Clave_del_Negocio, Nombre_del_Negocio, Direccion, Telefono,RFC,Email,Clasificaci�n,Latitud,Longitud)VALUES('$Clave_del_Negocio','$Nombre_del_Negocio','$Direccion','$Telefono','$RFC','$Email','$Clasificaci�n','$Latitud','$Longitud')";

$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron registrados satifactoriamente: ";
	echo " clave: ".$Clave_del_Negocio." nombre: ".$Nombre_del_Negocio." direccion: ".$Direccion. "Telefono: ".$Telefono."RFC: ".$RFC." Email: ".$Email." Clasificaci�n: ".$Clasificaci�n. "Latitud: ".$Latitud."Longitud: ".$Longitud;

}else{
	echo "Se produjo un error en elemomento de resgistrar los datos:".mysql_error();

}
mysql_close($conexion);
?>
