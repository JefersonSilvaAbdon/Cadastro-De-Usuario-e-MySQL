<?php
    // Estabelecer o envio de dados ao MYSQL
    
        if(isset($_POST['submit']))
        {
            print_r($_POST['nome']);
            print_r('<br>');
            print_r($_POST['email']);
            print_r('<br>');
            print_r($_POST['telefone']);
            print_r('<br>');
            print_r($_POST['genero']);
            print_r('<br>');
            print_r($_POST['data_nascimento']);
            print_r('<br>');
            print_r($_POST['cidade']);
            print_r('<br>');
            print_r($_POST['estado']);
            print_r('<br>');
            print_r($_POST['endereco']);
        
        
            // Reconhece a conexão MYSQL estabelecida no arquivo "config.php"
            include_once('config.php');

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $sexo = $_POST['genero'];
            $data_nascimento = $_POST['data_nascimento'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $endereco = $_POST['endereco'];

            // Envia os dados para as tabelas do banco de dados criadas
            $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco) 
            VALUES('$nome','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | API </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(4, 248, 78), rgb(18, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid rgb(0, 255, 106); 
        }
        legend{
            border: 1px solid rgb(0, 255, 106);
            padding: 10px;
            text-align: center;
            background-color: rgb(0, 255, 106);
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: chartreuse;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 255, 85), rgba(0, 255, 98, 0.486));
            width: 100%;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(8, 236, 84), rgba(18, 161, 73, 0.486));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Formulário dos dados</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <input type="radio" id="naobinario" name="genero" value="naobinario" required>
                <label for="naobinario">Nao Binario</label>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento">Data de nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade"class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado"class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco"class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html> 