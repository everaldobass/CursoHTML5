<?php
include"exeConexao.inc";

$vnome=$_POST["nome"];
$vuser=$_POST["user"];
$vsenha=$_POST["senha"];
$vmail=$_POST["email"];
$vtel=$_POST["telefone"];
$vst=$_POST["st"];
$vobs=$_POST["obs"];


$sql="INSERT INTO tb_cadastro VALUES(NULL, '$vnome','$vuser','$vsenha', '$vmail','$vtel','$vst','$vobs')";

$resultado=mysqli_query($con,$sql);
$num=mysqli_affected_rows($con);




mysqli_close($con);

?>

