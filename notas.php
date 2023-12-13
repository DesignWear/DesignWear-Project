<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: login.php');
        //
    }
    $logado = $_SESSION['login'];
    
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        //matricula, id_atividade, nota, idprofessor
        $sql = "SELECT * FROM nota WHERE id_atividade LIKE '%$data%' or matricula LIKE '%$data%' or nota LIKE '%$data%' or idprofessor LIKE '%$data%' ORDER BY matricula DESC";
    }
    else
    {
        $sql = "SELECT * FROM nota ORDER BY matricula DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Notas</title>
</head>
<body >
<header id="header">
				<header id="header">
					<div class="inner">
					<nav id="nav">
						<a>
							
						</a>
						<a>
							
						</a>
						<a 
							href="images/vt2.gif">
							<img 
							src="images/vt2.gif" 
							alt="Teste de links com imagens" 
							width="50">Sua conta
						</a>
						<a 
							href="TestRA.html">Use RA
						</a>
						<a 	
							href="home.php">Tela pricipal
						</a>
						<a 
							href="elements.html">Elements
						</a>
						
						
					</nav>
					<a 
						href="#navPanel" 
						class="navPanelToggle">
						<span 
							class="fa fa-bars">
						</span>
					</a>
				</div>
			</header>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">id_atividade</th>
                    <th scope="col">matricula</th>
                    <th scope="col">nota</th>
                    <th scope="col">idprofessor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<th>".$user_data['id_atividade']."</th>";
                        echo "<th>".$user_data['matricula']."</th>";
                        echo "<th>".$user_data['nota']."</th>";
                        echo "<th>".$user_data['idprofessor']."</th>";
                    }
                    ?>
            </tbody>
        </table>
        <form action="cadastrarNota.php" method="POST">
            <input class="inputSubmit" type="submit" name="button" value="Dar nota">
        </form>
        
        <!-- Scripts -->
			<script 
				src="assets/js/jquery.min.js">
			</script>
			<script
				src="assets/js/skel.min.js">
			</script>
			<script 
				src="assets/js/util.js">
			</script>
			<script 
				src="assets/js/main.js">
			</script>
</body>
</html>