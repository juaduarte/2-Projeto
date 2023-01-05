<?php
    session_start();
    include_once('../controller/config.php');
    $iddd = $_SESSION['usuario'];

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $loginn = $_POST['loginn'];
        $senha = $_POST['senha'];
        $tel = $_POST['tel'];
        $data_nasc = $_POST['data_nascimento'];
        $endereco = $_POST['endereco'];
        $cel = $_POST['cel'];
        $mae = $_POST['mae'];
        $cpf = $_POST['cpf'];
        $nivel = $_POST['nivel'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',mae='$mae', cpf ='$cpf',data_nasc='$data_nasc',cel='$cel',tel='$tel',endereco='$endereco',loginn='$loginn', senha='$senha',nivel ='$nivel'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);

        $result = mysqli_query($conexao, "INSERT INTO logs(id,log_data, log_acao, log_status) 
        VALUES ('$iddd', NOW(), 'editou registro',  'funcionou')");
    }
    header('Location: sistema.php');

?>