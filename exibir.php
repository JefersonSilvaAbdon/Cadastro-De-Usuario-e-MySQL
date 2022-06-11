<?php 
// A rota está setada sem endereçamento por estar localizada na mesma pasta
include("config.php");

// Seleciona os dados todas as tabelas
$consulta = "SELECT * FROM usuarios";

// Tenta retornar os dados para a página php
$con = $mysqli->query($consulta) or die($mysqLI->error);
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Sexo</td>
                <td>Nascimento</td>
                <td>Cidade</td>
                <td>Estado</td>
                <td>Endereço</td>
            </tr>
            <?php while($dado = $con->fetch_array()){ ?>
            <tr>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["email"]; ?></td>
                <td><?php echo $dado["telefone"]; ?></td>
                <td><?php echo $dado["sexo"]; ?></td>
                <td><?php echo $dado["data_nascimento"]; ?></td>
                <td><?php echo $dado["cidade"]; ?></td>
                <td><?php echo $dado["estado"]; ?></td>
                <td><?php echo $dado["endereco"]; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>