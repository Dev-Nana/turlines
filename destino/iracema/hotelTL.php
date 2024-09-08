<?php
include_once('../../conexao.php');

$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$adultos=$_POST['adultos'];
$crianças=$_POST['crianças'];
$pessoas=$_POST['pessoas'];


$sql=("INSERT INTO reservas (nome, checkin, checkout, adultos, crianças, pessoas) VALUES ('Iracema','$checkin', '$checkout', '$adultos','$crianças','$pessoas')");


$sql_code = "SELECT * FROM reservas";
$sql_query = $mysqli->query($sql_code) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error); 

$quantidade = $sql_query->num_rows;

    $reservas = $sql_query->fetch_assoc();

    if(!isset($_SESSION)) {
        session_start();
    }

$sql_val = "SELECT * FROM pacotes";
$sql_valquery = $mysqli->query($sql_val) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error); 

$quantidade2 = $sql_valquery->num_rows;

    $pacotes = $sql_valquery->fetch_assoc();

    if(!isset($_SESSION)) {
        session_start();
    }

    $_SESSION['id_pacotes'] = $pacotes['id_pacotes'];
    $_SESSION['id_hoteis'] = $pacotes['id_hoteis'];
    $_SESSION['id_guias'] = $pacotes['id_guias'];

    $_SESSION['id_reservas'] = $reservas['id_reservas'];
    $_SESSION['checkin'] = $reservas['checkin'];
    $_SESSION['checkout'] = $reservas['checkout'];
    $_SESSION['pessoas'] = $reservas['pessoas'];

    $result=$mysqli->query($sql);
    if($result){
      header("Location: formGuia.php");
}

// daqui
    // $a =     $_SESSION['checkin'] = $hoteis['checkin']; //atribui o valor da sessão 'a' à variável $a
    // $b =     $_SESSION['checkout'] = $hoteis['checkout']; //atribui o valor da sessão 'b' à variável $b

    // $_SESSION['dias'] = $b - $a; 
    
// $_SESSION ['a'] = 10; //atribui o valor 10 à sessão 'a'
// $_SESSION ['b'] = 5; //atribui o valor 5 à sessão 'b'
// $a = $_SESSION ['a']; //atribui o valor da sessão 'a' à variável $a
// $b = $_SESSION ['b']; //atribui o valor da sessão 'b' à variável $b

// $resultado = $a - $b; //subtrai os valores de $a e $b e armazena em $resultado
// echo $resultado; //imprime o valor de $resultado na tela


?>