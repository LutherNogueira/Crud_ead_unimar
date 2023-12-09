<?php
    require("conecta.php");

    $nomeProduto = $_POST['nomeProduto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO produtos (nomeProduto, descricao, preco, categoria)
        VALUES ('$nomeProduto', '$descricao', '$preco', '$categoria')";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Produto Inserido com Sucesso</h1>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>" . $sql . "<br>" . $conn->error;
    }

?>