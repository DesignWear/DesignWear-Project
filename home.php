<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['login'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM professor WHERE idprofessor LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' or login LIKE '%$data%' ORDER BY idprofessor DESC";
    }
    else
    {
        $sql = "SELECT * FROM professor ORDER BY idprofessor DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html>
	<head>
		<title>
			Início
		</title>
			<meta charset="utf-8">
			<meta name="robots" content="index, follow, 
			max-image-preview:large, 
			max-snippet:-1, 
			max-video-preview:-1">
			<meta name="viewport" content="width=device-width, 
			initial-scale=1">
			<link rel="stylesheet" href="assets/css/main.css">
		</head>
		<body>

		<!-- Header -->
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
							width="50">Programador Lucas
						</a>
						<a 
							href="TestRA.html">Use RA
						</a>
						<a 	
							href="generic.html">Generic
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
				
			</header><!-- Banner --><section >
				<div>
					<header>
						<img src="images/banner superior.png" 
						alt="banner" width="400">
						<img 
						style="position: absolute;
						left: 20px; 
						top: 150px;
						width: 90%; 
						height: 10%" 
						src="images/banner Minha Turma.png" />
						<img 
						style="position: absolute;
						left: 035px; 
						top: 250px;
						width: 90%; 
						height: 8%" 
						src=
						"images/banner status aula- Apresentação da peça Aula 1 - Saia.png" />
						</header>
						</div>
						</section>
				<ul class="icons">
					<li>
						<a href="home.php">
							<img style="position: absolute;
							left: 35px; 
							top: 710px;
							width: 10%; 
							height: 5%" 
							src="images/botão HOME.png" />
						</a>
						<form action="notas.php" method="POST">
                          
						  <img style="position: absolute;
							left: 120px; 
							top: 710px;
							width: 10%; 
							height: 5%" 
							src="images/botão NOTAS.png"/>
							<input 
							style="
							position: absolute;
    						left: 114px;
    						top: 702px;
    						width: 14%;
    						height: 7%;"
							class="inputSubmit" 
							type="submit" 
							name="button" 
							value="">
						</form>
					</li>
                </ul>
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
