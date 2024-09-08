<?php
include_once('conexao.php');

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$data_nasc=$_POST['data_nasc'];
$tel=$_POST['tel'];
$cpf=$_POST['cpf'];

if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['data_nasc']) || isset($_POST['tel']) || isset($_POST['cpf'])) {

    if(strlen($_POST['nome']) == 0){

    } 
    else if(strlen($_POST['email']) == 0){

    } 
    else if(strlen($_POST['senha']) == 0){

    } 
    else if(strlen($_POST['data_nasc']) == 0){

    } 
    else if(strlen($_POST['tel']) == 0){

    } 
    else if(strlen($_POST['cpf']) == 0){

    } 
    else {

    $mysqli->query("INSERT INTO cliente (nome, email, senha, data_nasc, tel, cpf) VALUES ('$nome', '$email','$senha','$data_nasc','$tel','$cpf')");

    $sql_code = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error); 
    
    $quantidade = $sql_query->num_rows;

        $cliente = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id_cliente'] = $cliente['id_cliente'];
        $_SESSION['nome'] = $cliente['nome'];
        $_SESSION['email'] = $cliente['email'];
        $_SESSION['data_nasc'] = $cliente['data_nasc'];
        $_SESSION['cpf'] = $cliente['cpf'];
        $_SESSION['tel'] = $cliente['tel'];

        header("Location: inicio2.php");
    }
}
?>
