<?php
include('./protect.php');

include_once('./conexao.php');

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
    
// não tava dando certo, então eu desisti e só comentei no dia 07/09/24
//     $_SESSION['id_pacotes'] = $pacotes['id_pacotes'];
//     $_SESSION['id_hoteis'] = $pacotes['id_hoteis'];
//     $_SESSION['id_guias'] = $pacotes['id_guias'];

    $_SESSION['id_reservas'] = $reservas['id_reservas'];
    $_SESSION['checkin'] = $reservas['checkin'];
    $_SESSION['checkout'] = $reservas['checkout'];
    $_SESSION['pessoas'] = $reservas['pessoas'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/formPagamento.css">
    <!-- <script src="for.js"></script> -->
    <title>Turlines</title>
</head>
<body>
        <div class="menu">

                <img src="./css/logo4.png" class="logo">

<!--DIVs Menu--><div class="menui"><div class="menui1"><div class="menu2">
<p class="p1"><a href="#cen" class="a1"><img src="./css/con.png" class="icon">  Central de Vendas &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="espaco">|</span></a></p>
                        <!--<img src="./cadastro.png" class="icon1"> <input type="button" value="Inciar Sessão &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" onclick="mostracadastrese()" class="cadastrar">-->                        
                        <p class="p2"><a href="./formCadas2.php" class="a1"><img src="./css/cadastro.png" class="icon">   &nbsp;&nbsp;&nbsp;<span class="espaco"></span></a><?php echo $_SESSION['nome'];?>&nbsp;&nbsp; &nbsp;&nbsp;|</p>
                        <p class="p3"><a href="#con" class="a1"><!--<span class="espaco">|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--><img src="./css/ajuda.png" class="icon">  Ajuda &nbsp;&nbsp;</a></p>
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

<!-- aqui começa o corpo -->

<div class="divp">
        <div class="divp2">
                <a href="./destino/iracema/formGuia.php" class="a11">⇽ Voltar para a página anterior</a>
                <p class="p11">Falta pouco! Complete seus dados e finalize sua compra.</p>
        </div>
</div>

<div>
<div class="form">
        <div class="form2">
                 <form class="form3" action="pagamentoTL.php" method="post">

                        <div class="part1">
                        <img src="./css/pagar.png" class="pagar">
                                <div class="radios">
                                        <input type="radio" id="div1" name="consulta[]" class="radio1" value="1">
                                        <input type="radio" id="div2" name="consulta[]" class="radio2" value="2">
                                        <input type="radio" id="div3" name="consulta[]" class="radio3" value="3">
                                </div>
                        </div>

                        <div class="part2">
                        <div class="areacartao" id="m1">

                                <div class="acartao">

                                        <!-- <img src="./css/cartao.png" class="cartao"> -->

                                        <div class="acartao2">
                                                <input type="text" class="inputcar" placeholder="Informe o número do cartão">
                                                <input type="text" class="inputcar" placeholder="Como aparece no cartão">
                                        </div>

                                        <div class="acartao3">
                                                <input type="month" class="inputcar2" min="2023-07">
                                                <input type="text" class="inputcar3" placeholder="Superior ao cartão">
                                                <input type="text" class="inputcar" placeholder="Ex: 012.345.678-90">
                                        </div>
                                        <img src="./css/cartao.png" class="cartao">
                                </div>
                        </div>
                        
                        <div class="areapix" id="m2">

                                <div class="apix">
                                        <div class="apix2">
                                                 <input type="text" class="inputpix1" placeholder="Insira somente números"  name="cpf">
                                                <input type="text" class="inputpix2" placeholder="Insira o seu nome e sobrenome" name="nome">
                                                <input type="text" class="inputpix3" value="<?php echo $reservas['id_reservas'];?>" name="id_reservas">
                                        </div>

                                <img src="./css/pix.png" class="pix">
                                </div>

                        </div>

                        <div class="areaboleto">

                                <div class="aboleto">
                                <img src="./css/boleto.png" class="boleto" id="m3">
                                </div>

                        </div>



                        </div>
                        <div class="divcom">
<!--AQUI EH O BOTAO DE ENVIAR--> <button class="comprar"><img src="./destino/css/compra.png" class="compra">&nbsp;Comprar</button>
                        </div>

                 </form>

                <div class="detalhes">
                        <div class="detalhes2">
                        <p class="detal">Detalhes do pagamento</p>
                        </div>
                <div class="display" id="deta1">
                        <div class="detalhes3">
                                <div class="detalhes31">

                                <p class="pde">Dia de entrada: </p>
                                <p class="pde2"><?php echo $_SESSION['checkin'];?></p>  

                                <p class="pde">Dia de saída: </p>
                                <p class="pde2"><?php echo $_SESSION['checkout'];?></p>


                                <p class="pde">Pacote para <?php echo $_SESSION['pessoas'];?> pessoa(s): </p>
                                <p class="pde2">R$<?php echo number_format(($_SESSION['pessoas']-1)*70, 2);?></p>

                                <p class="pde">Incluso guia turístico:  </p>
                                <p class="pde2">R$<?php echo number_format($_SESSION['id_guias'], 2);?></p>

                                <p class="pde">Hotel: </p>
                                <p class="pde2">R$<?php echo number_format($_SESSION['id_hoteis'] , 2);?></p>  

                                <div class="detalhes311">
                                <hr class="hr1">
                                </div>
                                <!-- <div class="detalhes312"> -->
                                <hr class="hr2">
                                <!-- <div>  -->
                                <!-- <div class="detalhes313"> -->
                                <p class="pde">Total: </p>
                                <p class="pde2">R$<?php echo number_format($_SESSION['id_guias']+$_SESSION['id_hoteis']+($_SESSION['pessoas']-1)*70 , 2);?></p> 
                                <!-- </div> -->
                                </div>
                        </div>
                </div>

                <div class="display2" id="deta2">
                        <div class="detalhes23">
                                <div class="detalhes312">

                                <p class="pde">Dia de entrada: </p>
                                <p class="pde2"><?php echo $_SESSION['checkin'];?></p>  

                                <p class="pde">Dia de saída: </p>
                                <p class="pde2"><?php echo $_SESSION['checkout'];?></p>


                                <p class="pde">Pacote para <?php echo $_SESSION['pessoas'];?> pessoa(s): </p>
                                <p class="pde2">R$<?php echo number_format(($_SESSION['pessoas']-1)*70 , 2);?></p>

                                <p class="pde">Incluso guia turístico:  </p>
                                <p class="pde2">R$<?php echo number_format($_SESSION['id_guias'] , 2);?></p>

                                <p class="pde">Hotel: </p>
                                <p class="pde2">R$<?php echo number_format($_SESSION['id_hoteis'] ,2);?></p>  

                                <p class="pde">Desconto de 3%:</p>
                                <p class="pde3">-R$<?php echo number_format(((($_SESSION['pessoas']-1)*70 + $_SESSION['id_guias']+$_SESSION['id_hoteis'])*0.03), 2);?></p> 

                                <div class="detalhes311">
                                <hr class="hr1">
                                </div>
                                <!-- <div class="detalhes312"> -->
                                <hr class="hr2">
                                <!-- <div>  -->
                                <!-- <div class="detalhes313"> -->
                                <p class="pde">Total: </p>
                                <p class="pde2">R$<?php echo number_format(($_SESSION['pessoas']-1)*70 + $_SESSION['id_guias']+$_SESSION['id_hoteis'] - ((($_SESSION['pessoas']-1)*70 + $_SESSION['id_guias']+$_SESSION['id_hoteis'])*0.03), 2);?></p> 
                                
                                <!-- </div> -->
                                </div>
                        </div>
                </div>

                <div class="display3" id="deta3">
                        <div class="detalhes23">
                                <div class="detalhes312">

                                <p class="pde">Dia de entrada: </p>
                                <p class="pde2"><?php echo $_SESSION['checkin'];?></p>  

                                <p class="pde">Dia de saída: </p>
                                <p class="pde2"><?php echo $_SESSION['checkout'];?></p>


                                <p class="pde">Pacote para <?php echo $_SESSION['pessoas'];?> pessoa(s): </p>
                                <p class="pde2">R$<?php echo number_format(($_SESSION['pessoas']-1)*70, 2);?></p>

                                <p class="pde">Incluso guia turístico:  </p>
                                <p class="pde2">R$<?php echo number_format($_SESSION['id_guias'], 2);?></p>

                                <p class="pde">Hotel: </p>
                                <p class="pde2">R$<?php echo number_format($_SESSION['id_hoteis'], 2);?></p>  

                                <p class="pde">Em até 7x:</p>
                                <p class="pde2">R$<?php echo number_format(( $_SESSION['id_guias']+$_SESSION['id_hoteis']+($_SESSION['pessoas']-1)*70)/7, 2)?></p> 

                                <div class="detalhes311">
                                <hr class="hr1">
                                </div>
                                <!-- <div class="detalhes312"> -->
                                <hr class="hr2">
                                <!-- <div>  -->
                                <!-- <div class="detalhes313"> -->
                                <p class="pde">Total: </p>
                                <p class="pde2">R$<?php echo number_format($_SESSION['id_guias']+$_SESSION['id_hoteis']+($_SESSION['pessoas']-1)*70 , 2);?></p> 
                                
                                <!-- </div> -->
                                </div>
                        </div>
                </div>
                </div>
        </div>
</div>
</div>

<!-- <div class="div1">
<a href="./destino/iracema/formGuia.php" class="a11">⇽Voltar para a página anterior</a>
<p class="p1">Falta pouco! Complete seus dados e finalize sua compra.</p>
</div> -->
</body>
</html>

        <script>


                var radio1 = document.getElementById("div1");
                var radio2 = document.getElementById("div2");
                var radio3 = document.getElementById("div3");
                var div1 = document.getElementById("m1");
                var div2 = document.getElementById("m2");
                var div3 = document.getElementById("m3");
                var div4 = document.getElementById("deta1");
                var div5 = document.getElementById("deta2");
                var div6 = document.getElementById("deta3");

                radio1.addEventListener("click", function() {
                div1.style.display = "block";
                div4.style.display = "block";
                div6.style.display = "none";
                div5.style.display = "none";
                div2.style.display = "none";
                div3.style.display = "none";
                });

                radio2.addEventListener("click", function() {
                div2.style.display = "block";
                div5.style.display = "block";
                div6.style.display = "none";
                div4.style.display = "none";
                div1.style.display = "none";
                div3.style.display = "none";
                });

                radio3.addEventListener("click", function() {
                div3.style.display = "block";
                div6.style.display = "block";
                div2.style.display = "none";
                div1.style.display = "none";
                div4.style.display = "none";
                div5.style.display = "none";
                });
        </script>