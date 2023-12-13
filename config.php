<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '1234';
    $dbName = 'designweardb';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

     /*if($conexao->connect_errno)
     {
         echo "Erro";
     }
     else
     {
         echo "Conexão efetuada com sucesso";
     }*//*use designweardb;
-- desc nota;
/*INSERT INTO atividade(titulo, descricao)VALUES('Atividade 1', '1ª atividade');
SET @id_atividade = LAST_INSERT_ID();
INSERT INTO atividade(titulo, descricao)VALUES('Atividade 2', '2ª atividade');
SET @id_atividade = LAST_INSERT_ID();
INSERT INTO atividade(titulo, descricao)VALUES('Atividade 3', '3ª atividade');
SET @id_atividade = LAST_INSERT_ID();
INSERT INTO atividade(titulo, descricao)VALUES('Atividade 4', '4ª atividade');
SET @id_atividade = LAST_INSERT_ID();
INSERT INTO atividade(titulo, descricao)VALUES('Atividade 5', '5ª atividade');
SET @id_atividade = LAST_INSERT_ID();*/
/*INSERT INTO nota(matricula, id_atividade, nota, idprofessor)VALUES('1234', '1', '6.5', '1');
INSERT INTO nota(matricula, id_atividade, nota, idprofessor)VALUES('1234', '2', '7.5', '1');
INSERT INTO nota(matricula, id_atividade, nota, idprofessor)VALUES('1234', '3', '9.5', '1');
INSERT INTO nota(matricula, id_atividade, nota, idprofessor)VALUES('1234', '4', '2.5', '1');
INSERT INTO nota(matricula, id_atividade, nota, idprofessor)VALUES('1234', '5', '1.5', '1');*/
-- DELETE FROM nota WHERE matricula = 1234;
select * from nota;
/*select * from aluno;
select * from professor;
select * from atividade;
desc atividade;*/*/ 

?>