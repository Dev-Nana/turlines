<!DOCTYPE html>
<html lang="por">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/formHotel.css">
</head>
<body>
    
    <div class="div1">

        <div class="div2">
            <img src="./css/costão_barra_suite_master.webp">
        </div>

<div class="div3">
    <div class="div31">
            <form class="form">   
                <div class="divinput">
            
                <div class="dinput1">
                    <label class="l1">CHECK IN</label>
                    <input type="date" class="input1">
                </div>

                <div class="dinput2">
                    <label class="l1">CHECK OUT</label>
                    <input type="date" class="input2">
                </div>

                <div class="dinput3">
                    <label class="l1">ADULTS</label>
                    <input type="text" class="input3" placeholder="1...">
                </div>

                <div class="dinput4">
                    <label class="l1">CHILDREN</label>
                    <input type="text" class="input4" placeholder="1...">  <!--required minlength="8"-->
                </div>
                </div>

                <div class="divselect">
                    <label class="select">ROOM TYPE</label>
                    <select class="select1">
                        <option hidden>Select room type...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;⇩</option>
                        <option>Standard: &nbsp;Suíte básica, tamanho padrão.</option>
                        <option>Master:&nbsp; Suíte confortável, espaço maior com closet, vista para o mar.&nbsp;&nbsp;&nbsp;&nbsp;</option>
                        <option>Deluxe: &nbsp;Suíte principal, espaço ampliado, varanda, serviço incluso.</option>
                    </select>
                </div>
</div>
                <div  class="divsubmit">
                    <button type="submit" class="submit">Enviar</button>
                </div>
    </form>
</div>

</body>
</html>