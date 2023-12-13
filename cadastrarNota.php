<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $matricula = $_POST['matricula'];
        $id_atividade = $_POST['id_atividade'];
        $nota = $_POST['nota'];
        $idprofessor = $_POST['idprofessor'];

        $result = mysqli_query($conexao, "INSERT INTO nota(matricula, id_atividade, nota, idprofessor)
        VALUES('$matricula', '$id_atividade', '$nota ', '$idprofessor'");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Cadastrar nota</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
            <div class="inputBox">
                    <input type="text" name="matricula" id="matricula" class="inputUser" required>
                    <label for="matricula" class="labelInput">matricula completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="nota" id="nota" class="inputUser" required>
                    <label for="nota" class="labelInput">nota</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="id_atividade" id="id_atividade" class="inputUser" required>
                    <label for="id_atividade" class="labelInput">id_atividade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="idprofessor" id="idprofessor" class="inputUser" required>
                    <label for="idprofessor" class="labelInput">idprofessor</label>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>