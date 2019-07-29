<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/fontawesome/css/all.css">
	<link rel="stylesheet" href="css/stilo.css">
	<title>carrito de compra</title>
</head>
<body>
	<nav>
		<div class="container-fluid ">
			<div class="row " id="nave">
			<!--navegacion-->
				<div class="col-md-5">
					<ul id="navegacion">
						<li><a href="">inicio</a></li>
						<li><a href="">servicio</a></li>
						<li><a href="">contacto</a></li>
						<li><a href="">ayuda</a></li>
					</ul>
				</div>
			<!-- fin navegacion-->
			<!-- aqui empeza formulario de busqueda-->			
				<div class="col-md-4">
					<form action="" class="form-inline mt-2">
						<input type="search" class="form-control">
						<input type="submit" class="btn btn-outline-success ml-1">
					</form>
					
				</div>
				<!-- aqui termina formulario de busqueda-->	
				<!-- aqui empeza carrito y cuenta-->	
				<div class="col-md-3">
					<ul id="cuenta">
						<li id="sub"><a href=""><span class="text-white mr-2"><i class="fas fa-user"></i></span>cuenta</a>
							<ul class="pl-0 bg-success" id="sub1" >

								<div class="card" style="width: 100%;">
									<div class="card-header text-center text-uppercase"> <b>cuenta</b></div>
									<img src="img/avatar.jpg" alt="" class="card-img-top">
									
								</div>
								<li><a class="text-white text-uppercase " href="">iniciar</a></li>
								<li><a class="text-white text-uppercase" href="">crear </a></li>

							</ul>
						</li>
						<li><a href=""> <span class="text-white mr-2"><i class="fas fa-cart-plus"></i></span> carrito</a></li>
					</ul>
				</div>
				<!-- aqui termina carrito y cuenta-->	
			</div>
		</div>
	</nav>

</body>
</html>