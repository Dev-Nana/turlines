<?php
include_once('conexao.php');


$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$tel=$_POST['tel'];
$cpf=$_POST['cpf'];


if(strlen($_POST['senha']) > 0){

    $sql="update cliente set nome='$nome', email='$email', senha='$senha', tel='$tel' WHERE cpf='$cpf'" ;

    $result=$mysqli->query($sql);
    if($result){
      header("Location: inicio2.php");
    }

}

else if(strlen($_POST['senha']) == 0){

    $sql="delete from cliente where cpf='$cpf'";

    $result=$mysqli->query($sql);
    if($result){
      header("Location: inicio.php");
    }
}



if(!isset($_SESSION)) {
    session_start();
}

// $_SESSION['id_cliente'] = $cliente['id_cliente'];
// $_SESSION['nome'] = $cliente['nome'];
// $_SESSION['email'] = $cliente['email'];
// $_SESSION['data_nasc'] = $cliente['data_nasc'];
// $_SESSION['cpf'] = $cliente['cpf'];
// $_SESSION['tel'] = $cliente['tel'];

?>