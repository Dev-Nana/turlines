<?php
include_once('conexao.php');

$id_cliente=$_POST['id_cliente'];
$id_reservas=$_POST['id_reservas'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$adultos=$_POST['adultos'];
$crianças=$_POST['crianças'];
$pessoas=$_POST['pessoas'];




    $sql="delete from pagamento WHERE id_reservas='$id_reservas'";

    $result=$mysqli->query($sql);
    if($result){
        $sql_code="update reservas set checkin='$checkin', checkout='$checkout', adultos='$adultos', crianças='$crianças', pessoas='$pessoas' WHERE id_reservas='$id_reservas'" ;

        $resultado=$mysqli->query($sql_code);
        if($resultado){

            $sql_codea=("INSERT INTO pagamento (id_reservas, id_cliente) SELECT id_reservas, id_cliente FROM reservas, cliente WHERE id_reservas = ('$id_reservas') AND  id_cliente = ('$id_cliente')");
            $resultado=$mysqli->query($sql_codea);
            if($resultado){
                header("Location: pacotesdeviagens.php");
            }

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