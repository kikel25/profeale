<?php
include "conexion.php";

$Nombre_del_Negocio=$_POST["nom"];
$Direccion=$_POST["dic"];
$Telefono=$_POST["tel"];
$Clave_del_Negocio=$_POST["clan"];

$sql="UPDATE estudiantes SET Nombre='$Nombre_del_Negocio', Direccion='$Direccion', Telefono='$Telefono' WHERE ClavedelNegocio='$Clave_del_Negocio'";
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron Actualizados satisfactoriamente: ";
	echo " NombredelNegocio: ".$Nombre_del_Negocio." Direccion: ".$Direccion." Telefono: ".$Telefono. "Clavedelnegocio: ".$Clave_del_Negocio;

}else{
	echo "Se produjo un error en el momento de Actualizar los datos:".mysql_error();

}
mysql_close($conexion);
?>

