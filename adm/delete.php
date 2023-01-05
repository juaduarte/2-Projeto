<?php
session_start();
$iddd = $_SESSION['usuario'];

  require_once('../controller/config.php'); //chama or arquivo config.php

  $id = intval($_GET['id']); //recebe e atribui a uma variavel o id

  $sql_code_usu = "DELETE FROM usuarios WHERE id = '$id'"; //prepara codigos sql para serem executados

  $log = mysqli_query($conexao, "INSERT INTO logs(id, log_data, log_acao, log_status) 
  VALUES ('$iddd',NOW(), 'Deletou',  'Funcionou')");

  $sql_query_usu = $conexao->query($sql_code_usu,$log) or die($mysqli->error);
  if ($sql_query_usu) ;

  header('Location: sistema.php');
  ?>
