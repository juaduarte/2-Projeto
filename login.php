<?php

include_once('controller/config.php');


$erro = false; //variavel de erro
if (isset($_POST['loginn']) && isset($_POST['senha'])) { //aqui o PHP verifica se existe inserção de dados nos campos e se for true, ele atribui aos valores dos campos, variáveis
  $loginn = $_POST['loginn'];
  $senha = $_POST['senha'];

  $sql_code = "SELECT * FROM usuarios WHERE loginn = '$loginn' and senha = '$senha'"; //codigo sql
  $sql_query = $conexao->query($sql_code) or die($conexao->error); //variavel que dfine o suscesso ou fracasso da operação

  if ($sql_query->num_rows == 0) { //aqui ele verifica se há resultados para o código sql executado, caso seja igual a 0 ele retorna email inconrreto
    $errados = "Dados errados";
  } else {
    $usuario = $sql_query->fetch_assoc(); 
      if (!isset($_SESSION)) { 
        session_start();
        $_SESSION['usuario'] = $usuario['id'];
        $_SESSION['nivel'] = $usuario['nivel'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['cpf'] = $usuario['cpf'];
        $_SESSION['mae'] = $usuario['mae'];
        $_SESSION['celular'] = $usuario['cel'];
        $_SESSION['nascimento'] = $usuario['data_nasc'];
        $_SESSION['loginn'] = $_POST['loginn'];
        header("Location: 2fa.php");
      }
    }
  }


  //Aqui ele apresenta um erro caso alguma das operações acima dê errado
  if (!$erro) {
  } else {
    echo $erro;
  }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Login- TC!</title>
    <link rel="stylesheet" href="css/estilologin.css">
</head>
<body>
    <main class="container">
        <h2>Login!!</h2>
        <form action="" method="POST">
            <div class="input-field">
                <input type="text" name="loginn" id="loginn"
                    placeholder="Digite seu Login">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="senha" id="senha"
                    placeholder="Digite sua Senha">
                <div class="underline">
                </div>
                </div>
           
            <input type="submit" name="submit" value="Entrar">
        </form>

        <div class="footer">
            <span>Não é cadastrado? <a href="formulario.php">Clique aqui!</a></span>
            <span>Deseja retornar? <a href="index.html">Aqui!</a></span>
        </div>
    </main>
</body>
</html>