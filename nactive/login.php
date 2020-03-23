<?php
include("conexion.php");
$obj=new conexion;
$response =array();
$usuario=$_GET["user"];
$contraseña=$_GET["pass"];
$res=$obj->buscarUsuario($usuario,$contraseña);
if ($res==1) {
    $response['status']=1;
}else {
    $response['status']=0;
}
echo json_encode($response, JSON_FORCE_OBJECT);
?>