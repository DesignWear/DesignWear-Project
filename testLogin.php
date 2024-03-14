<?php
    session_start();
    
    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
    {
        // Include do arquivo de configuração
        include_once('config.php');
        
        // Obter valores do formulário
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        // Consulta SQL para verificar login de aluno
        $sql1 = "SELECT * FROM aluno WHERE login = ? AND senha = ?";
        $stmt1 = $conexao->prepare($sql1);
        $stmt1->bind_param("ss", $login, $senha);
        $stmt1->execute();
        $result1 = $stmt1->get_result();

        // Consulta SQL para verificar login de professor
        $sql2 = "SELECT * FROM professor WHERE login = ? AND senha = ?";
        $stmt2 = $conexao->prepare($sql2);
        $stmt2->bind_param("ss", $login, $senha);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        // Verificar se o login é de aluno
        if($result1->num_rows >= 1)
        {   
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
            exit();
        }
        else if($result2->num_rows >= 1)
        {
            // O login é de professor
            $row = $result2->fetch_assoc(); // Extrair a primeira linha de resultados
            $tipoLogin = $row['tipoLogin']; // Extrair o valor do campo tipoLogin
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
            exit();
        }
        else
        {
            // Redirecionar para a página de login
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('Location: index.php');
            exit();
        }
    }
    else
    {
        // Redirecionar para a página de login
        header('Location: index.php');
        exit();
    }
?>
