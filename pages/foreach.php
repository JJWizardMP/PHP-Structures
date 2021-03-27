<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FOR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
        <!-- CSS files -->
        <link rel="stylesheet" href="./../assets/styles/form-foreach.css">
	</head>
    <body class="p-3 mb-2 bg-primary">
		<?php 
			session_start();
			if(!isset($_SESSION['user'])){
                header('Location:./../nologin.php');
			}
		?>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">Hola <?php echo $_SESSION['user']; ?>, ejemplo FOR</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#"> <span class="sr-only">(current)</span> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"></a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#"> </a>
				</li>
				</ul>
				<a href="./../dashboard.php" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Regresar</a>
			</div>
		</nav>
		<!-- END NavBar -->
		<!-- Card -->
		<div class="card dark Content-Center" >
			<div class="card-body">
				<p class="h3 card-title center-block">Seleciona una opción: </p>
				<br>
				<!-- Form -->
				<form action="./../forms/process-foreach.php" method="POST">
					<div class="mb-1 input-container">
						<label for="Select"><i class="fas fa-mouse-pointer"></i> Selecciona una reacción</label>
						<select id="Select" name="selector" class="form-control" >
							<option value="Torbellino">Torbellino</option>
							<option value="Cristalizado">Cristalizado</option>
							<option value="Congelado">Congelado</option>
							<option value="Electro-Carga">Electro-Carga</option>						<option value="Sobre-Carga">Sobre-Carga</option>
							<option value="Superconductor">Superconductor</option>
							<option value="Vaporizado">Vaporizado</option>
							<option value="Derretido">Derretido</option>
							<option value="Quemadura">Quemadura</option>
						</select>
					</div>
					<p class="center-block" >
						<input class="btn btn-primary" type="submit" 
							name="submit" value="Enviar" /> 
					</p>
				</form>
				<!-- END Form --> 
			</div> 
		</div>
		<!-- END Card -->
		<!-- Content Result -->
		<div class="alert p-3 mb-2 bg-dark text-white Content-Result" role="alert">
			<span style="color:green;">> </span><span id="Result"></span>
		</div>
		<!-- END Content Result -->
        <!-- Footer -->
        <footer id="Foot" class="bg-dark text-center text-white">
            <div class="container-fluid">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © <?php echo date("Y"); ?> copyright:
                    <a class="text-white" href="https://www.unicaribe.mx/" target="blank_">
                        Universidad del Caribe</a>
                 </div>
                <!-- Copyright -->
            </div>
        </footer>
        <!-- End Footer -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- partial -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/ae2bc38384.js" crossorigin="anonymous"></script>
		<!-- External Scripts -->
		<script type="text/javascript" src="./../assets/Scripts/form-foreach.js"> </script>
	</body>
</html>
