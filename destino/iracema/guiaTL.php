<?php
include_once('../../conexao.php');

// $sql= ("INSERT INTO pacotes (id_voos, id_hoteis, id_guias, id_reservas) VALUES ('1','340', '150', '35')");
$sql=("UPDATE pacotes SET id_guias = 150;");

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
      header("Location: ../../formPagamento.php");
}



// $sql_code = "SELECT * FROM reservas";
// $sql_query = $mysqli->query($sql_code) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error); 

// $quantidade = $sql_query->num_rows;

//     $reservas = $sql_query->fetch_assoc();

//     if(!isset($_SESSION)) {
//         session_start();
//     }

//     $_SESSION['id_reservas'] = $reservas['id_reservas'];
//     $_SESSION['checkin'] = $reservas['checkin'];
//     $_SESSION['checkout'] = $reservas['checkou'];
//     $_SESSION['pessoas'] = $reservas['pessoas'];

//     header("Location: ../../formPagamento.php");
?>