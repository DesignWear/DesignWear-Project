<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('./config.php');
        $login = $_POST['login'];
        $senha = $_POST['senha'];

         print_r('Login: ' . $login);
         print_r('<br>');
         print_r('Senha: ' . $senha);
         
        $sql = "SELECT * FROM professor WHERE login = '$login' and senha = '$senha'";

        $result = $conexao->query($sql);

         print_r($sql);
         print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('Location: ./login.php');
        }
        else
        {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('Location: ./home.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: ./login.html');
       
    }
?>