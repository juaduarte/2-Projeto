<?php
    session_start();
    unset($_SESSION['loginn']);
    unset($_SESSION['senha']);
    header("Location: ../index.html");
?>