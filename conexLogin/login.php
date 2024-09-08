<body>
    Aguarde...
</body>
<?php
include_once "conexão.php";
$login=$_POST['login'];
$senha=$_POST['senha'];

$sql="SELECT * FROM cliente WHERE login='$login' and senha='$senha'";
$resultado = $con -> query($sql);
$result = $resultado
if(mysql_num_rows($result)>0){
    $_SESSION['login']=$login;
    $_SESSION['senha']=$senha;
    header('location:index.php');
}
setcookie('');
header('location:login.html');
?>