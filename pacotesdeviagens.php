<?php
include('protect.php');


$sql_code = "SELECT * FROM reservas";
$sql_query = $mysqli->query($sql_code) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error); 

$quantidade = $sql_query->num_rows;

    $reservas = $sql_query->fetch_assoc();

    if(!isset($_SESSION)) {
        session_start();
    }



    $_SESSION['id_reservas'] = $reservas['id_reservas'];
    $_SESSION['nomere'] = $reservas['nome'];
    $_SESSION['checkin'] = $reservas['checkin'];
    $_SESSION['checkout'] = $reservas['checkout'];
    $_SESSION['adultos'] = $reservas['adultos'];
    $_SESSION['crianças'] = $reservas['crianças'];
    $_SESSION['pessoas'] = $reservas['pessoas'];

$sql = "SELECT * FROM cliente";
$sql_querya = $mysqli->query($sql) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error);

$cliente = $sql_querya->fetch_assoc();

        $_SESSION['id_cliente'] = $cliente['id_cliente'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turlines</title>
    <style>
        .table{
            display: flex;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.726);
            margin-top:300px;
            border-radius: 10px;
            width:1300px;
            position: absolute;
        }
        .body{
            background-size: 100%; 
            display: flex; 
            justify-content: center;
            background-image: url(./css/wall.jpeg); 
        }
        th{
            /* border-radius: 10px; */
            font-size:26px;
            background-color: rgba(4, 97, 97, 0.352);
            width: 160px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        /* td{
            border-radius: 10px;
        } */
        button{
            display: flex;
            width: 140px;
            height: 40px;
            justify-content: center;
            align-items: center;
        }
        input{
            background:transparent;
            border: none;
            font-size: 23px;
            height:30px;
            width: 175px;
        }
        input:hover{
            border:none;
        }
        .input{
            font-size: 1px  ;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
</head>
<body class="body">
    <table border="3" class="table">
        <tr>
            <th>ID Reservas</th>
            <th>Nome</th>
            <th>Checkin</th>
            <th>Checkout</th>
            <th>Adultos</th>
            <th>Crianças</th>
            <th>Pessoas</th>
        </tr>
        <tr>
        <form action="atualizaReser.php" method="post">
            
            <td><input type="text" value="<?php echo $_SESSION['id_reservas'];?>" name="id_reservas"></td>
            <td><input type="text" value="<?php echo $_SESSION['nomere'];?>" name="nomere"></td>
            <td><input type="date" value="<?php echo $_SESSION['checkin'];?>" name="checkin"></td>
            <td><input type="date" value="<?php echo $_SESSION['checkout'];?>" name="checkout"></td>
            <td><input type="text" value="<?php echo $_SESSION['adultos'];?>" name="adultos"></td>
            <td><input type="text" value="<?php echo $_SESSION['crianças'];?>" name="crianças"></td>
            <td><input type="text" value="<?php echo $_SESSION['pessoas'];?>" name="pessoas"></td>
            <input class="input" type="text" value="<?php echo $_SESSION['id_cliente'];?>" name="id_cliente">
        </tr>
    </table>
                                            <button>Atualizar</button></form>
    <form action="excluiReser.php" method="post"><button>Excluir</button><input class="input" type="text" value="<?php echo $_SESSION['id_reservas'];?>" name="id_reservas"><input class="input" type="text" value="<?php echo $_SESSION['id_cliente'];?>" name="id_cliente"></form>
</body>
</html>
</body>
</html>