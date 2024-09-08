<?php
include_once('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {  //se não existir

    if(strlen($_POST['email']) == 0){
        header("Location: /Turlines/falha/falha.html");
    } else if(strlen($_POST['senha']) == 0){
        header("Location: /Turlines/falha/falha.html");     //é besteira pra dizer que os dados nao foram preenchidos
    } else {

    $email = $mysqli->real_escape_string($_POST['email']);      
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error);
    
    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

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
    } else{
        header("Location: /Turlines/falha/falha.html");
    }
}
        // $sql="UPDATE cliente set nome='$nome', tel='$tel', email='$email', senha='$senha' where id_cliente='$id'";
}
?>