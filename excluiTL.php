<?php
include_once('conexao.php');

$cpf=filter_input(INPUT_POST,"cpf", FILTER_DEFAULT);

$sql="delete from cliente where cliente.cpf='$cpf'";
// $sql="delete * FROM reservas WHERE id_reservas = (Selection id_reservas FROM pagamento)";
$result=$mysqli->query($sql);
if($result){
    header("Location: inicio.php");
}
?>
