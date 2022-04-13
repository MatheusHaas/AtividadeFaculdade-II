<?php

    include "conexao.php";
    $nome = $_POST["nome"];
    $itemcomprado = $_POST["itemcomprado"];
    $valorcompras = $_POST["valorcompras"];
    $anoultimacompra = $_POST["anoultimacompra"];

    $inserir = "INSERT INTO clientes (IDCLIENTE, NOMECLIENTE, NOMEITEMMAISCOMPRADO, VALORCOMPRAS, ANOULTIMACOMPRA) VALUES (null, '$nome', '$itemcomprado', '$valorcompras', '$anoultimacompra')";

    if (mysqli_query($status, $inserir)){
        echo "Dados gravados com sucesso!!";
    } else {
        echo "Erro: ".$inserir."<br> ".mysqli_error($status);
    }
    
    mysqli_close($status);
?>