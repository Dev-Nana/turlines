<?php
include('../../protect.php');
include_once('../../conexao.php');
$sql_val = "SELECT * FROM reservas";
$sql_valquery = $mysqli->query($sql_val) or die ("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error); 

$quantidade = $sql_valquery->num_rows;

    $reservas = $sql_valquery->fetch_assoc();

    if(!isset($_SESSION)) {
        session_start();
    }

    $_SESSION['id_reservas'] = $reservas['id_reservas'];
    $_SESSION['checkin'] = $reservas['checkin'];
    $_SESSION['checkout'] = $reservas['checkout'];


        $data1 = date_create($_SESSION['checkin']);
        $data2 = date_create($_SESSION['checkout']);
        $diferenca = date_diff($data1, $data2);

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/formGuia.css">
    <!-- <script src="for.js"></script> -->
    <title>Turlines</title>
</head>
<body>
        <div class="menu">

                <img src="../css/logo4.png" class="logo">

<!--DIVs Menu--><div class="menui"><div class="menui1"><div class="menu2">
<p class="p1"><a href="#cen" class="a1"><img src="../css/con.png" class="icon">  Central de Vendas &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="espaco">|</span></a></p>
                        <!--<img src="./cadastro.png" class="icon1"> <input type="button" value="Inciar Sessão &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" onclick="mostracadastrese()" class="cadastrar">-->                        
                        <p class="p2"><a href="../formCadas2.php" class="a1"><img src="../css/cadastro.png" class="icon">   &nbsp;&nbsp;&nbsp;<span class="espaco"></span></a><?php echo $_SESSION['nome'];?>&nbsp;&nbsp; &nbsp;&nbsp;|</p>
                        <p class="p3"><a href="#con" class="a1"><!--<span class="espaco">|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--><img src="../css/ajuda.png" class="icon">  Ajuda &nbsp;&nbsp;</a></p>
                </div></div></div>

        </div>

        <div class="previa">

                <div class="previa1">
                        <button class="bu1"><a href="inicio.php" class="a2">Pacotes</a></button>   
                        <button class="bu1"><a href="formHotel.php" class="a2">Hospedagens</a></button>   
                        <button class="bu1"><a href="#con" class="a2">Transportes</a></button>   
                        <button class="bu1"><a href="#con" class="a2">Passagens</a></button>   
                        <button class="bu1"><a href="#con" class="a2">Guias</a></button>
                        <button class="bu1"><a href="#con" class="a2">Excursões</a></button>      
                </div>

        </div>

<!--AQUI VAI COMEÇAR A APRESENTAÇÃO -->
<div class="divp">
        <div class="divp2">
                <p class="dias">Você tem <?php echo $diferenca->format("%a dias");?> para explorar Fortaleza. Já sabe o que vai fazer?</p>
                <p class="atra">Guias Turísticos</p>
        </div>
</div>

<div class="tel">
<div class="tela">
        <div class="tela1">
                <img src="../css/dragao.jpg" class="dragao">
                <button class="b1" onclick="mostrarTela()"></button>
        </div>

        <div class="tela2">
                <img src="../css/ponte.png" class="dragao">
                <button class="b2" onclick="mostrarTela2()"></button>
        </div>

        <div class="tela3">
                <img src="../css/beira.png" class="dragao">
                <button class="b3"></button>
        </div>
</div>
</div>

<div class="divp3">
        <div class="divp4">
                <p class="dias">Dirija por Fortaleza</p>
                <p class="atra">Carros</p>
        </div>
</div>
<div class="tela4">
        <img src="../css/transporte.png" class="trans">
</div>

        <!-- Alertas -->

<div id="alerta1">
        <img src="../css/alerta.png" class="alerta">
        <form action="guiaTL.php" method="post"><button class="confir"></button></form>
        <button id="cancel" onclick="mostrarTela()"></button>
</div>
<div id="alerta2"><img src="../css/alerta2.png" class="alerta">
<form action="guia2TL.php" method="post"><button class="confir"></button></form>
        <button id="cancel" onclick="mostrarTela()"></button></div>


<!-- Termina tudo e vai pros créditos -->

                                <div class="fim">
                                <div class="fim2" id="cen">
                                        <img src="../../img_pacotes/fim.png" width="1510px">
                                </div>
                                </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
<script>
        function mostrarTela() {
        var alerta1 = document.getElementById("alerta1");
        if (alerta1.classList.contains("mostrar")) {
                alerta1.classList.remove("mostrar");
        } else {
                alerta1.classList.add("mostrar");
        }
        }
        function mostrarTela2(){
        var alerta2 = document.getElementById("alerta2");
        if (alerta2.classList.contains("mostrar")) {
                alerta2.classList.remove("mostrar");
        } else {
                alerta2.classList.add("mostrar");
        }
        }
</script>
