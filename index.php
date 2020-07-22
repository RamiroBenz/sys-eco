<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lola Morena: Tienda Online de Lenceria para toda la familia..</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="Shortcut Icon" type="image/x-jpg" href="assets/logo_lm.jpg" />
</head>
<body>
	<header class="colore" style="--main-header-color: linear-gradient(45deg, #520303, #7d0505);
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
				'<div class="item-option"><i class="fa fa-user-circle-o" aria-hidden="true" style="color:#7d0505;"></i><p>'.$_SESSION['nomusu'].'</p></div>
				<div class="item-option" title="Salir"><a href="logout.php" style="color:#7d0505;"><i class="fa fa-sign-out h6 p-l-1 style="color:#7d0505;" m-a-0" aria-hidden="true"></i></a></div>';
			}else{
			?>
			<div class="item-option" title="Registrate"><a href="registrar.php"><i class="fa fa-user-circle-o" style="color:#7d0505;" aria-hidden="true"></i></a></div>
			<div class="item-option" title="Ingresar"><a href="login.php"><i class="fa fa-sign-in" style="color:#7d0505;" aria-hidden="true"></i></a></div>
			
			<?php
			}
			?>
			<div class="item-option" title="Mis compras" style="color:#7d0505;">
				<a href="carrito.php"><i class="fa fa-shopping-cart" style="color:#7d0505;" aria-hidden="true"></i></a>
			</div>
		</div>
	</header>
	<div class="main-content">
		
			<!-- Crear un slider de 1200px x 400 px.. -->
		<!-- Slider -->
<div align="center" id="slider" style="margin-top: 35px;">
  <div class="slides">
    <div class="slider">
      
      <div class="content">
        
      </div>
      <div class="image">
        <img src="assets/banner4_benbenutti.jpg">
      </div>
    </div>
    <div class="slider">
      
      <div class="content">
        
      </div>
      <div class="image">
        <img src="assets/banner3.jpg">
      </div>
    </div>
    <div class="slider">
      
      <div class="content">
        
      </div>
      <div class="image">
        <img src="assets/banner2.jpg">
      </div>
    </div>
    <div class="slider">
      
      <div class="content">
        
      </div>
      <div class="image">
        <img src="assets/banner5.jpg">
      </div>
    </div>
  </div>
  
</div> 

			<!-- Fin del Slider para crear..
				 -->
 			
		<div class="content-page" style="width: 100%; margin-top: 20px;">
			<div class="title-section" style="color: #7d0505; margin-top: 10px;">Ofertas de esta semana</div>
			<div align="center" class="products-list" id="space-list" style="width: 80%;">
			</div>
		</div>
	</div>
	<!-- Darle estilos a este div de abajo -->
	<div class="empresa" style="">
			<h1>¿Quienes somos?</h1>
			
		<p>Somos una empresa innovadora en el mercado.
		"Lola Morena Lencería" es una empresa familiar con mas de 30 años en plaza, y gracias a la confianza de nuestros clientes,
		ampliamos nuestra red de ventas y diseñamos un nuevo modelo de empresa. Estamos en Capital Federal y recientemente realizamos la apertura de nuestro único local a la calle de venta mayorista.
		Iniciamos nuestras actividades comercializando los rubros de corsetería y lencería y con el paso del tiempo nos expandimos.
		El crecimiento de "Lola Morena Lencería" está basado en el permanente esfuerzo, creatividad y conocimiento que aportamos al emprendimiento comercial. Y la experiencia adquirida, nos permite ofrecerle varias modelos; convencidos de conocer las necesidades, criterios y demandas de nuestros clientes.
		La política comercial de "Lola Morena", está basada en innovar. Por ello facilitamos las condiciones para que usted pueda operar con nosotros eficientemente a través de Internet, en este sitio. Desde "Lola Morena"
		acompañaremos su emprendimiento comercial. Para ello contamos con un "stock que incluye las líneas completas de nuestra marca en el mercado argentino en lencería y pijamas. Ello incluye también la ropa interior para hombres y niños.
		"Tenemos inmejorables precios y garantizamos la entrega de la mercadería, en cualquier punto del país".
		Esperamos poder servir de la mejor manera a nuestros clientes para facilitar su compra, dándole la mayor comodidad y satisfacción. Sólo de esa forma nuestra misión estará cumplida.</p>
		</div>
	<div align="center" style="margin-top: 80px">
		<img src="assets/local.JPG" alt="" style="width: 350px;border-radius: 10px;">
		<h3 style="color: #7d0505;">Abierto de Lun. a Vier. <br>
			 de 10:00 a 17:00</h3>
	</div>


	<footer style="height: 100px;">
		<div align="center" style="padding-top: 60px; ">
			<p style="color: #7d0505;">Lola Morena Lenceria&copy 2020</p>
		</div>
	</footer>
	<br>
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
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+'<br>'+
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
	</script>
</body>
</html>