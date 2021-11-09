<?php

    $usuario = $_POST["user"];
    $email = $_POST["mail"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $produto = $_POST["produto"];
    $valor = $_POST["valor"];
    $descricao = $_POST["descricao"];
    $estado = $_POST["estado"];

    $con = mysqli_connect("localhost:8889", "root", "root", "banco_vendas");
   
    mysqli_query($con, "INSERT INTO anuncie_aqui_bd (Usuario_Vendas, Email_Vendas, Telefone_Vendas,Cidade_Vendas, Produto_Vendas, Descricao_Vendas, Valor_Vendas, Estado_Vendas) VALUES('$usuario', '$email', '$telefone','$cidade', '$produto', '$valor','$descricao','$estado') ");

 ?>