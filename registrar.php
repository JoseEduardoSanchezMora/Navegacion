<?php
header('Content-Type: application/json');
include("conexion.php");
$obj= new conexion;
$reponse=array();
$json=file_get_contents('php://input');
$jsonObj=json_decode($json,true);
$emil=$jsonObj["pEmail"];
$user=$jsonObj["pUser"];
$pass=$jsonObj["pPass"];

$consulta="insert into usuario(usuario,pass,correo) values('".$user."','".$pass."','".$emil."')";
echo $consulta;
$res=$obj->registrarUsuario($consulta);
if ($res==1) {
    $reponse['status']=1;
}
else{
    $reponse['status']=0;
}
echo json_encode($response);
?>