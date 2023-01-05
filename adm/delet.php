<?php

    if(!empty($_GET['id']))
    {
        include_once('../controller/config.php');

        $id = $_GET['id'];
        


        $sqlInsert = "DELETE CASCADE FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);

        $result = mysqli_query($conexao, "INSERT INTO logs(id,log_data, log_acao, log_status) 
        VALUES ('Sistema', '".date('Y-m-d H:i:s')."', 'Deletou',  'funcionou')");
    }

    header('Location: sistema.php');
   
?>