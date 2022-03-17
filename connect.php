<?php 

    $conexao = mysqli_connect ("localhost", "root","");

    if(mysqli_connect_errno())
{
    echo "falha ao conectar: ". mysqli_connect_errno(); die();
}
mysqli_select_db($conexao, "livraria");
?>