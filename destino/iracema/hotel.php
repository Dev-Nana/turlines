<?php
include('../../protect.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/hotel.css">
    <script src="hotel.js"></script>
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
<div class="tel">
<div class="tela">
        <div class="tela1">
                
<div class="tela11">
                <button class="btn1" onclick="plusDivs(-1)">&#10094;</button>
                <button class="btn2" onclick="plusDivs(1)">&#10095;</button>
</div>
                <img src="../css/iracema2.jpeg" class="mySlides" id="mySlides">
                <img src="../css/iracema3.jpeg" class="mySlides" id="mySlides" style="display: none;">
                <img src="../css/iracema4.jpeg" class="mySlides" id="mySlides" style="display: none;">
                

                <img src="../css/iracH.png" class="iracH">
        </div>

        <div class="tela2">
                <div class="tela21">
                <img src="../css/form.png" class="form">
                </div>

                <div class="div3">
                <div class="div31">
        <form class="reser" action="hotelTL.php" method="POST">   
                                   
                        <label class="l1">Check in:</label>
                        <input type="text" class="input1" name="checkin" min="2023-06-11" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="12/06/2023">

                        <label class="l1">Check out:</label>
                        <input type="text" class="input1" name="checkout" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="12/07/2023">
        
                        <label class="l1">Adultos:</label>
                        <input type="text" class="input1" name="adultos" placeholder="1..." value="1">
                        
        
                        <label class="l1">Crianças:</label>
                        <input type="text" class="input1" name="crianças" placeholder="1...">  <!--required minlength="8"-->
                
        
                        <label class="select">Quartos:</label>
                        <select class="select1">
                                <option hidden>Select room type...&nbsp;&nbsp;&nbsp;&nbsp;⇩</option>
                                <option>Standard: &nbsp;Suíte básica, tamanho padrão.</option>
                                <option>Master:&nbsp; Suíte confortável, espaço maior com closet, vista para o mar.&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                <option>Deluxe: &nbsp;Suíte principal, espaço ampliado, varanda, serviço incluso.</option>
                        </select>

                </div>
                </div>
                        <img src="../css/number.png" class="infor">

                <div class="number1">
                        <div class="number11">
                                <input type="number" class="number" name="pessoas" min="1" max="10" value="1">
                        </div>
                </div>

                        <img src="../css/number2.png" class="infor">

                <div  class="divsubmit">
                <button type="submit" class="submit"><img src="../css/compra.png" class="compra"> &nbsp;Comprar</button>
                </div>

        </form>

        </div> 
</div> 
</div>



                                <!-- <div class="voltardiv">
                                <p><a href="../inicio2.php"  class="voltar"><span class="roda">↺</span>&nbsp;&nbsp;Voltar ao início</a></p>
                                </div> -->


                                <div class="fim">
                                <div class="fim2" id="cen">
                                        <img src="../../img_pacotes/fim.png" width="1510px">
                                </div>
                                </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
