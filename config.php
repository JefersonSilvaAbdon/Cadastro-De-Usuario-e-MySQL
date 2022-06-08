<?php

    // Faz conexão com o MYSQL
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '251095';
    $dbName = 'form-api';

    $mysqli = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // Se a conexão for negada, imprime "erro"
    // Enntão, ele pode executar a conexão e exibir a mensagem na tela
    /*if($mysqli->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão Feita!";
    }

?> */
