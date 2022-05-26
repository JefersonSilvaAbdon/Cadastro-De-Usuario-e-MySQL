<?php

    // Faz conexão com o MYSQL
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = '';

    $mysqli = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // Se a conexão for negada, imprime "erro"
    // Enntão, ele pode executar a conexão e exibir a mensagem na tela
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão Feita!";
    }

?>