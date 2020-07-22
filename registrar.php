<!DOCTYPE html>
<html>
<head>
	<title>Mi sistema E-Commerce</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="Shortcut Icon" type="image/x-jpg" href="assets/logo_lm.jpg" />
	<style type="text/css">
		form{
			max-width: 460px;
			height: 350px;
			width: calc(100% - 40px);
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			margin: auto;
			margin-top: 150px;
		}
		form h3{
			margin: 15px 0;
		}
		form input{
			padding: 7px 10px;
			width: calc(100% - 22px);
			margin-bottom: 20px;
		}
		form button{
			padding: 10px 15px;
			width: calc(100%);
			background: #7d0505;
			border: none;
			color: #fff;
		}
		form p{
			margin: 0;
			margin-bottom: 5px;
			color: var(--main-red);
			font-size: 14px;
		}
		form a {
			color: #7d0505;
			text-align: center;
		}
		a {
			text-align: center;
		}
	</style>
</head>
<body>
	<header style="--main-header-color: linear-gradient(45deg, #520303, #7d0505);
	    --main-red: #7d0505;">
		<div class="logo-place"><a href="index.php"><img src="assets/LolaMora.png" style=" width:80px; border-radius: 5px;"></a></div>
	</header>
	<div class="main-content">
		<div class="content-page">
			<form action="servicios/registrar.php" method="POST">
			<div align="center">
				<br>
				<img src="assets/LolaMora.png" alt="" width="150px" style="border-radius: 15px;">
				<br>
				</div>
				<h3>Registráte aquí</h3>
				<input type="text" name="nomusu" placeholder="Nombre">
				<input type="text" name="apeusu" placeholder="Apellido">
				<input type="text" name="emausu" placeholder="Correo">
				<input type="password" name="pasusu" placeholder="Contraseña">
				<?php
					if (isset($_GET['e'])) {
						switch ($_GET['e']) {
							case '1':
								echo '<p>Error de conexión</p>';
								break;	
							case '2':
								echo '<p>Email inválido</p>';
								break;	
							case '3':
								echo '<p>Contraseña incorrecta</p>';
								break;							
							default:
								break;
						}
					}
				?>
				<button type="submit">Registráte</button>
				<br>
				<br><br>
				<!-- <a href="registrar.php">Registráte</a> --><br>
			</form>
		</div>
	</div>
</body>
</html>