<!DOCTYPE html>
<html lang="por">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/formLogin.css">
</head>
<body>
    
    <div class="div1">

        <div class="div2">
            <img src="./css/turistas.jpeg">
        </div>

<div class="div3">
    <div class="div31">
            <form class="form" action="loginTL.php" method="post">   
                <div class="divinput">
                <img src="./css/login.png" class="iconlogin">

                <div class="dinput2">
                    <label class="l1">Email</label>
                    <input type="text" class="input2" name="email" required minlength="1">
                </div>
<div class="grid">
                <div class="dinput3">
                    <label class="l1">Senha</label>
                    <input type="password" class="input3" name="senha" required minlength="1">
                </div>
</div><br>
                <div  class="divsubmit">
                    <button type="submit" class="submit">Entrar</button>
                </div>
            </form>
            </div><!--div3--->
</div> <!--div3--->

</body>
</html>