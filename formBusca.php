<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bd_turlines";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    //TE AMO REGINA N BRIGA COMIGO
    
    $pesquisaO = $_POST['pesquisaO'];
    $pesquisaD = $_POST['pesquisaD'];

    if(strlen($_POST['pesquisaD']) == 0){

    $pesquisaO = $_POST['pesquisaO'];
    $result_cursos = "SELECT origem FROM voos WHERE origem LIKE '%$pesquisaO%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){ //FUNCIONAAAA
        if($rows_cursos['origem'] == "Fortaleza CE" ){          //QUASE TERMINADO
            header("Location: origem/fortaleza.php");
        }
        else if($rows_cursos['origem'] == "São Paulo SP"){  //AINDA NÃO FIZ O LAYOUT
                header("Location: origem/saopaulo.php");
        }
        else{
            header("Location: vazio.php");  //NÃO FUNCIONA AINDA OU EU NÃO SEI
        }
    }
    }
    else if(strlen($_POST['pesquisaO']) == 0){
        
        $pesquisaD = $_POST['pesquisaD'];
        $result_cursos = "SELECT destino FROM voos WHERE destino LIKE '%$pesquisaD%' LIMIT 5";
        $resultado_cursos = mysqli_query($conn, $result_cursos);
        
        while($rows_cursos = mysqli_fetch_array($resultado_cursos)){ //FUNCIONAAAA
            if($rows_cursos['destino'] == "São Paulo SP" ){     //NÃO FIZ O LAYOUT
                    header("Location: destino/saopaulo.php");
            }
            else if($rows_cursos['destino'] == "Salvador BA"){      //NÃO FIZ O LAYOUT
                    header("Location: destino/salvador.php");
            }
            else if($rows_cursos['destino'] == "Fortaleza CE"){     //NÃO TERMINEI
                header("Location: destino/fortaleza.php");
            }
        }
    }


    else if(strlen($_POST['pesquisaO']) > 0    &&   strlen($_POST['pesquisaD']) > 0){

        $pesquisaO = $_POST['pesquisaO'];
        $pesquisaD = $_POST['pesquisaD'];

        $result_cursos = "SELECT origem, destino FROM voos WHERE origem LIKE '%$pesquisaO%' AND destino LIKE '%$pesquisaD%' LIMIT 5"; 
        $resultado_cursos = mysqli_query($conn, $result_cursos);
        
        while($rows_cursos = mysqli_fetch_array($resultado_cursos)){ //FUNCIONAAAA
            if($rows_cursos['origem'] == "Fortaleza CE" && $rows_cursos['destino'] == "Sao Paulo SP"){
                header("Location: ce_sp.php");
            }
            else if($rows_cursos['origem'] == "São Paulo SP" && $rows_cursos['destino'] == "Salvador BA"){
                header("Location: sp_ba.php");
            }
            else if($rows_cursos['origem'] == "São Paulo SP" && $rows_cursos['destino'] == "Fortaleza CE"){
                header("Location: destino/fortaleza2.php");
            }
            else{
                header("Location: vazio.php");
            }
        }
    }
?>