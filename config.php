<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'aluno'/*
    Essa é a senha que o mysql do IFSC usa.
    E se for usar em outro lugar é só trocar pra senha q está no mysql.*/;
    $dbName = 'designweardb';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    /*
     if($conexao->connect_errno)
     {
         echo "Erro";
     }
     else
     {
         echo "Conexão efetuada com sucesso";
     }*/
?>