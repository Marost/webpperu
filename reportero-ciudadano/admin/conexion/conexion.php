<?php
//CONEXION CON EL SERVIDOR
$conexion=mysql_connect("localhost","root","");
mysql_select_db("pperugdpr14",$conexion);

//ZONA HORARIA
date_default_timezone_set('America/Lima');

//ERROR REPORTING
ini_set('error_reporting', E_ALL ^ E_NOTICE);

//VARIABLES GLOBALES
global $carpeta_admin;
global $tabla_suf;
global $sesion_pre;
global $rst_empresa;
global $fila_empresa;
global $rst_prv_user;
global $fila_prv_user;
global $usuario_user;
global $usuario_nombre;
global $usuario_apellido;
global $usuario_email;
global $web;
global $web_nombre;
global $web_nosotros;
global $fechaActual;

//VARIABLES
$carpeta_admin="reportero-ciudadano/admin";
$tabla_suf="lndd";
$sesion_pre="pperu";
$fechaActual=date("Y-m-d H:i:s");

//EMPRESA
$rst_empresa=mysql_query("SELECT * FROM ".$tabla_suf."_empresa WHERE id=1", $conexion);
$fila_empresa=mysql_fetch_array($rst_empresa);
$web=$fila_empresa["web"];
$web_nombre=$fila_empresa["nombre"];
$web_nosotros=$fila_empresa["nosotros"];

//URL DE ARCHIVOS
$url_admin=$web."".$carpeta_admin."/";

if ($_SESSION["user-".$sesion_pre.""]<>""){
	$usuario_user=$_SESSION["user-".$sesion_pre.""];
	$usuario_nombre=$_SESSION["user_nombre-".$sesion_pre.""];
	$usuario_apellido=$_SESSION["user_apellido-".$sesion_pre.""];
}

?>