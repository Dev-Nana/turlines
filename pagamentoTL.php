<?php
include_once('conexao.php');

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$id_reservas=$_POST['id_reservas'];

// $sql=("INSERT INTO pagamento (id_cliente, cpf) VALUES ('$nome','$cpf')");
// $result=$mysqli->query($sql);
// if($result){
//   header("Location: inicio.php");}

// $sql=("INSERT INTO pagamento (nome, cpf) SELECT nome, cpf FROM cliente WHERE cpf = (SELECT cpf FROM clientes WHERE id = 1);)");
// $sql=("INSERT INTO pagamento (id_cliente) SELECT id_cliente FROM cliente WHERE cpf = ('$cpf')");
$sql=("SELECT cpf FROM cliente WHERE cpf = ('$cpf')");
$sql_query = $mysqli->query($sql) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error);
    
    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

      $sql_code=("INSERT INTO pagamento (id_reservas, id_cliente) SELECT id_reservas, id_cliente FROM reservas, cliente WHERE id_reservas = ('$id_reservas') AND  cpf = ('$cpf')");
      $result=$mysqli->query($sql_code);
      if($result){
        header("Location: inicio.php");}
      header("Location: sucesso.php");
  } else{
      header("Location: ./falha/falha2.html");
  }
    
// $result=$mysqli->query($sql);
// if($result){
//   header("Location: sucesso.php");}
?>