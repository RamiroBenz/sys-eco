<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Todos los productos de Lola Morena Lenceria..</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="Shortcut Icon" type="image/x-jpg" href="assets/logo_lm.jpg" />
</head>
<body>
	<header style="--main-header-color: linear-gradient(45deg, #520303, #7d0505);
    --main-red: #7d0505; color: #000;">
		<div class="logo-place"><a href="index.php"><img src="assets/LolaMora.png" title="Inicio" style="width: 80px; border-radius: 5px;"></a></div>
		<div class="search-place">
			<!-- <input type="text" id="idbusqueda" placeholder="Encuenta todo lo que necesitas...">
			<button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button> -->
		</div>
		<div class="options-place">
			<?php
			if (isset($_SESSION['codusu'])) {
				echo
				'<div class="item-option"><i class="fa fa-user-circle-o" aria-hidden="true" style="color: #7d0505;"></i><p>'.$_SESSION['nomusu'].'</p></div>
				<div class="item-option" title="Salir"><a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true" style="color: #7d0505;"></i></a></div>';
			}else{
			?>
			<div class="item-option" title="Registrate"><i class="fa fa-user-circle-o" aria-hidden="true" style="color: #7d0505;"></i></div>
			<div class="item-option" title="Ingresar"><i class="fa fa-sign-in" aria-hidden="true" style="color: #7d0505;"></i></div>

			<?php
			}
			?>
			<div class="item-option" title="Mis compras">
				<a href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: #7d0505;"></i></a>
			</div>
		</div>
	</header><br><br>
	<div class="main-content" style="width: 100%; margin-top: 20px;">
		<div class="content-page">
			<section>
				<div class="part1">
					<img id="idimg" src="assets/products/cam_dore.jpg">
				</div>
				<div class="part2">
					<h2 id="idtitle">Camisolin Dorado</h2>
					<h1 id="idprice">$ 399.<span>99</span></h1>
					<h3 id="iddescription">Camisolin Dorado realizado en razo y puntilla en escote</h3>
					<button onclick="iniciar_compra()">Comprar</button>
				</div>
			</section>
			<div class="title-section">Productos destacados</div>
			<div class="products-list" id="space-list">
			</div>
		</div>
	</div>

	<div align="center" style="margin-top: 80px">
		<img src="assets/local.JPG" alt="" style="width: 350px;border-radius: 10px;">
		<h3 style="color: #7d0505;">Abierto de Lun. a Vier. <br>
			 de 10:00 a 17:00</h3>
	</div>


	<footer style="height: 180px;">
		<div align="center" style="padding-top: 160px; ">
			<p style="color: #7d0505;">Lola Morena Lenceria&copy 2020</p>
		</div>
	</footer>
	<br>


	<script type="text/javascript">
		var p='<?php echo $_GET["p"]; ?>';
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						if (data.datos[i].codpro==p) {
							document.getElementById("idimg").src="assets/products/"+data.datos[i].rutimapro;
							document.getElementById("idtitle").innerHTML=data.datos[i].nompro;
							document.getElementById("idprice").innerHTML=formato_precio(data.datos[i].prepro);
							document.getElementById("iddescription").innerHTML=data.datos[i].despro;
						}
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		function formato_precio(valor){
			//10.99
			let svalor=valor.toString();
			let array=svalor.split(".");
			return "$ "+array[0]+".<span>"+array[1]+"</span>";
		}
		function iniciar_compra(){
			$.ajax({
				url:'servicios/compra/validar_inicio_compra.php',
				type:'POST',
				data:{
					codpro:p
				},
				success:function(data){
					console.log(data);
					if (data.state) {
						alert(data.detail);
					}else{
						alert(data.detail);
						if (data.open_login) {
							open_login();
						}
					}
				},
				error:function(err){
					console.error(err);
				}
			});
		}
		function open_login(){
			window.location.href="login.php";
		}
	</script>
</body>
</html>