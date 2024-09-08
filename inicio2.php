<?php
include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/iniciocss.css">
    <script src="tl.js"></script>
    <title>Turlines</title>
</head>
<body>
        <div class="menu">

                <img src="./css/logo4.png" class="logo">

<!--DIVs Menu--><div class="menui"><div class="menui1"><div class="menu2">
                        <p class="p1"><a href="#cen" class="a1"><img src="./css/con.png" class="icon">  Central de Vendas &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="espaco">|</span></a></p>
                        <!--<img src="./cadastro.png" class="icon1"> <input type="button" value="Inciar Sessão &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" onclick="mostracadastrese()" class="cadastrar">-->                        
                        <p class="p2"><a href="formCadas2.php" class="a1"><img src="./css/cadastro.png" class="icon">   &nbsp;&nbsp;&nbsp;<span class="espaco"></span></a><?php echo $_SESSION['nome'];?>&nbsp;&nbsp; &nbsp;&nbsp;|</p>
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



<!--CONTAINER--><div class="busca">
<!--Buscar1-->          <div class="busca1">
                        <p class="pv">Pacotes de viagens</p>

<!--DIV botões brancos-->       <div class="pv1">
                                        <button class="bu2"><a class="pv2" href="#econo">&nbsp;&nbsp;Até 50% de Economia&nbsp;&nbsp;</a></button>
                                        <button class="bu2"><a class="pv2" href="#all">&nbsp;&nbsp;All-Inclusive&nbsp;&nbsp;</a></button>
                                        <button class="bu2"><a class="pv2" href="#promo">&nbsp;&nbsp;Promoções Nacionais&nbsp;&nbsp;</a></button>
<!--Fecha DIV botoes-->         </div>

<!--DIV FORM-->                 <div class="form">
                        <form action="formBusca.php" method="post" class="form1">

<!--ORIGEM-->                                   <div class="form2">
                                        <label class="la1">ORIGEM</label>
                                        <img src="./css/locali.png" class="locali"><input type="text" class="in1" name="pesquisaO" placeholder="Insira sua cidade...">
<!--Fecha ORIGEM-->                             </div>

<!--DESTINO-->                                  <div class="form3">
                                        <label class="la2">DESTINO</label>
                                        <img src="./css/locali.png" class="locali"><input type="text" class="in2" name="pesquisaD" placeholder="Insira uma cidade...">
<!--Fecha DESTINO-->                            </div>

<!--DESTINO-->                                  <div class="form4">
                                        <label class="la3">IDA</label>
                                        <input type="date" class="in3">
<!--Fecha DESTINO-->                            </div>

<!--DESTINO-->                                  <div class="form5">
                                        <label class="la4">VOLTA</label>
                                        <input type="date" class="in4">
<!--Fecha DESTINO-->                            </div>

                                        <button type="submit" class="sub1" value="ENVIAR"><img src="./css/lupa.png" class="lupa">Buscar</button>
                        </form>
                                <a class="limp" href="inicio.php">Clique para limpar os campos preenchidos..</a>
        <!--Fecha Form--></div>
<!--Fecha Buscar1--></div>
</div><!--Fecha CONTAINER-->


<!--ABRE A BARRA DE ROLAGEM-->  <div class="pacot">
                                        <div class="pacot1">
                                        <p class="ptela" id="econo">Pacotes de Viagens com até 50% de economia</p>
                                        </div>
                                
                                        <div class="pacot2">
                                        <button class="pac1"><a href="" class="pas"><img src="./img_pacotes/sp_al.png" class="sp_al" width="302px"></a></button>
                                        <button class="pac1"><a href="" class="pas"><img src="./img_pacotes/sp_pb.png" class="sp_pb" width="302px"></a></button>
                                        <button class="pac1"><a href="" class="pas"><img src="./img_pacotes/sp_ba.png" class="sp_ba" width="302px"></a></button>
                                        <button class="pac1"><a href="" class="pas"><img src="./img_pacotes/sp_pr.png" class="sp_pr" width="302px"></a></button>
                                        
                                        </div>
                                        
                                </div>

                                <!-- <div class="fim">
                                <div class="fim2">
                                        <img src="./img_pacotes/fim.png" width="1510px">
                                </div>
                                </div> -->
                                <div class="nor">
                                <div class="nor">
                                        <img src="./img_pacotes/nordeste.png" width="1280px">
                                </div>
                                </div>
<div class="pacote" id="all">
        <div class="pacote1">
        <p class="patela">All-<br>Incluso</p><br><br><br><br><br><br><p class="patela">All-<br>Incluso</p><br><br><br><br><br><br><p class="patela">All-<br>Incluso</p>
        </div>
        
        <div class="pacote2">
        <button class="paco1"><a href="" class="pas"><img src="./img_pacotes/all_ba.png" class="all_ba" width="1000px"></a></button>
        <button class="paco1"><a href="" class="pas"><img src="./img_pacotes/all_se.png" class="all_se" width="1000px"></a></button>
        <button class="paco1"><a href="" class="pas"><img src="./img_pacotes/all_ce.png" class="all_ce" width="1000px"></a></button>
        </div>
</div>
                                <div class="anun">
                                <div class="anun">
                                        <img src="./img_pacotes/nordeste.png" width="1280px">
                                </div>
                                </div>

                                <div class="pacot">
                                        <div class="pacot1">
                                        <p class="ptela" id="econo">Seus pacotes de viagens: </p>
                                        <a href="pacotesdeviagens.php">
                                        </div>
                                
                                        <div class="pacot2">
                                        </div>
                                        
                                </div>

                                <div class="fim">
                                <div class="fim2" id="cen">
                                        <img src="./img_pacotes/fim.png" width="1510px">
                                </div>
                                </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
