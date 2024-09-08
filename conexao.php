<?php 
$servidor="localhost";
$bd="bd_turlines";//nome do banco
$password="";
$user="root";


$mysqli=new mysqli($servidor, $user, $password, $bd);

if($mysqli->connect_errno){
echo "Falha ao conectar ao Mysql". $mysqli->connect_error;
exit();
}
?>