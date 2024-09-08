<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(./falha/wall.jpeg); 
            background-size: 100%; 
            display: flex; 
            justify-content: center;
        }
        .a{
            background-color: rgba(247, 255, 253, 0.827); 
            width: 750px; 
            height: 380px; 
            display: flex; 
            margin-top: 170px; 
            border-radius: 20px;
            justify-content: center;
        }
        img{
            margin-left: 225px;
            margin-top: 20px;
        }
        .p1{
            display: flex;
            justify-content: center;
            text-align: center;
            color: #009A97;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
        }
        .p2{
            display: flex;
            justify-content: center;
            color: #009A97;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 33px;
            margin-top: -30px;
        }
        button{
            background-color: transparent;
            border-color: #4fc2a7;
            width: 100px;
            transition-duration: 1s;
        }
        button:hover{
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
            transition-duration: 0.9s;
        }
        a{
            color: #4fc2b1;
            text-decoration: none;
            font-size: 20px;
        }
        .grid{
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
<div class="a">
    <div class="a2">
        <img src="./css/ok.png" width="120px" height="110px">
        <p class="p1">Compra bem executada! Faça uma boa viagem.</p><p class="p2">__________________________</p>
    <div class="grid">
        <button><a href="./formPagamento.php">Voltar</a></button> <!--a reticencias é pra voltar uma pasta-->
        <button><a href="./inicio.php">Início</a></button>
    </div>
    </div>
</body>
</html>