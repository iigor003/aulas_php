<?php
    //importando o arquivo de conexão com o bd(connect)//
    require("connect.php");

    //obtendo os valores dos campos
    $descricao =$_POST['c_descricao'];
    $quantidade =$_POST['c_quantidade'];
    $autor =$_POST['c_autor'];
    $tipo_capa =$_POST['tipo_capa'];
    $categoria_livro=$_POST['categoria_livro'];
    $termo=$_POST['c_termo'];
    $data_nascimento=$_POST['data_nascimento'];

    //armazenando a SQL em uma variavel
    $sql = "INSERT INTO `item` (`descricao`,`quantidade`,`autor`,`tipo_capa`,`categoria`,`termo`,`data_nascimento`) VALUES ('$descricao','$quantidade','$autor','$tipo_capa','$categoria_livro','$termo','$data_nascimento')";

    //executando a SQL que esta na variavel
    $resultado = mysqli_query($conexao, $sql);

    //imprimindo na tela
    echo "inserindo com sucesso";
?>
<P><a href="form_cadastrar_livro.html">Voltar</a>