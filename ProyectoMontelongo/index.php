<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Virtual Arrow Shop</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"> Virtual Arrow Shop</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
				<li><a href="productos.php"><span class="glyphicon glyphicon-modal-window"></span>Productos</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn" ><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Id_Producto</div>
									<div class="col-md-3">Imagen del producto</div>
									<div class="col-md-3">Nombre del producto</div>
									<div class="col-md-3">Precio del producto</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Iniciar Sesión</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Iniciar/Sesion</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Correo Electronico</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Contraseña</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Recordar Contraseña</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<h1><p>Bienvenidos a Virtual Arrow Shop</p></h1>
			<h3><p> Revisen nuestro catalogo de productos</p></h3>
			<div class="col-md-2 col-xs-12">
				<p><img src="logo.jpg" class="img-responsive"></p>
				<div id="get_category">
				</div>
				
				<div id="get_brand">
				</div>

			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Productos</div>
					<div class="panel-body">
						<div id="get_product">
						</div>
						
					</div>
					<div class="panel-footer">&copy; 2018 <p>-Montelongo & Leon</p><p>Contactanos! virtual.arrow.shop@hotmail.com</p>
						<a href="mailto:#">¿Quiénes Sómos?<br>Misión Visión Valores<br>Preguntas Frecuentes</a>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div> 
</body>
</html>
















































