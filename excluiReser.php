<?php
include_once('conexao.php');

$id_cliente=$_POST['id_cliente'];
$id_reservas=$_POST['id_reservas'];

// $sql="delete from pagamento where id_cliente='$id_cliente' AND id_reservas='$id_reservas'";
$sql="delete from pagamento";
// $sql="delete * FROM reservas WHERE id_reservas = (Selection id_reservas FROM pagamento)";
$result=$mysqli->query($sql);
if($result){
    // $sql_code="delete from reservas where id_reservas='$id_reservas'";
    $sql_code="delete from reservas";
    $resultado=$mysqli->query($sql_code);
    if($resultado){
    header("Location: inicio.php");}
}
?>