<?php

    if(isset($_POST['submit']))
    {
       
        include_once('controller/config.php');

        $nome = $_POST['nome'];
        $loginn = $_POST['loginn'];
        $senha = $_POST['senha'];
        $tel = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $endereco = $_POST['endereco'];
        $cel = $_POST['celular'];
        $mae = $_POST['mae'];
        $cpf = $_POST['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,mae,cpf,data_nasc,cel,tel,endereco,loginn,senha) 
        VALUES ('$nome','$mae','$cpf','$data_nasc','$cel','$tel','$endereco','$loginn','$senha')");

        header('Location: login.php');
    }

    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script type="text/javascript" src="js/script.js"></script>
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="img/undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form" id="form">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se!</h1>
                    </div>
                </div>
                <form action="formulario.php" method="POST">
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" required name="nome" placeholder="Digite seu nome">
                    </div>

                    <div class="input-box">
                        <label for="mae">Nome materno</label>
                        <input id="mae" type="text" required name="mae" placeholder="Digite o nome de sua Mãe">
                    </div>
                    <div class="input-box">
                        <label for="name">CPF</label>
                        <input id="cpf" type="text" required name="cpf" placeholder="Digite seu CPF">
                    </div>

                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input type="text" required name="celular" placeholder="(xx) xxxx-xxxx">
                    </div>

                    <div class="input-box">
                        <label for="telefone">Telefone fixo</label>
                        <input type="text" required name="telefone" placeholder="(xx) xxxx-xxxx">
                    </div>

                    <div class="input-box" id="input">
                        <label for="password">Senha</label>
                        <input id="senha" type="password" required name="senha" placeholder="Digite sua senha">
                    </div>

                    <div class="input-box">
                        <label for="usuario">Endereço</label>
                        <input id="endereco" type="text" required name="endereco" placeholder="Coloque seu Endereço">
                    </div>

                    <div class="input-box">
                        <label for="usuario">Usuário</label>
                        <input id="loginn" type="text" required name="loginn" placeholder="Coloque seu usuário">
                    </div>

                    <div class="input-box">
                        <label for="usuario">Data de Nascimento</label>
                        <input id="data_nasc" required type="text" placeholder="Digite a sua data" name="data_nascimento" maxlength="10" onkeypress="mascaraData( this, event )">
                    </div>

                </div>

                <div class="continue-button">
                    <input type="submit" name="submit" id="submit" onclick="funcao1()">
                </div>
            </form>
        </div>
    </div>
</body>

</html>