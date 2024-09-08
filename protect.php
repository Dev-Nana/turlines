<?php

include_once('conexao.php');

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_cliente'])) {
}
?>