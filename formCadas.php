<!DOCTYPE html>
<html lang="por">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/formCadas.css">
</head>
<body>
    
    <div class="div1">

        <div class="div2">
            <img src="./css/turistas.jpeg">
        </div>

<div class="div3">
    <div class="div31">
            <form class="form" action="cadastroTL.php" method="post">   
                <div class="divinput">
            
                <div class="dinput1">
                    <label class="l1">Nome</label>
                    <input type="text" class="input1" name="nome" required minlength="1">
                </div>

                <div class="dinput2">
                    <label class="l1">Email</label>
                    <input type="text" class="input2" name="email" required minlength="1">
                </div>
<div class="grid">
                <div class="dinput3">
                    <label class="l1">Senha</label>
                    <input type="password" class="input3" name="senha" required minlength="7">
                </div>

                <div class="dinput4">
                    <label class="l1">Nascimento</label>
                    <input type="date" class="input4" name="data_nasc" required minlength="1">  <!--required minlength="8"-->
                </div>
</div>
                <div class="dinput5">
                    <label class="l1">CPF</label>
                    <input type="text" class="input5" name="cpf" required minlength="14">  <!--required minlength="8"-->
                </div>

                <div class="dinput6">
                    <label class="l1">Telefone</label>
                    <input type="text" class="input6" name="tel" required minlength="1">  <!--required minlength="8"-->
                </div>

                </div>
</div>
                <div  class="divsubmit">
                    <button type="submit" class="submit">Enviar</button>
                </div>
            </form>
</div>

</body>
</html>