<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="es">
  <head>
    <meta charset="utf-8">
	<title>Pedal911<br>
Alquiler
</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <?php

include("include/menu.php");

?>

<center>
<h3>Alquilar una bicicleta</h3>
<div  style="background-color:#848484;">
	<form action="index.html" method="post">
		<button type="submit">Aquirir una</button>
	</form>
</div>
</center>
			
  <footer class="footer">
	<center>
		<div class="item">
			<body  style="background-color:#848484;">
			<img src="images/fondo.jpg" alt="#" style="min-height:250px; min-width:100%"/>
				<div class="carousel-caption">
					<p>&copy; Joel Ganchozo<br>&copy; Stefani Samaniego</p>
	</center>
</footer>


  <!-- Navbar
    ================================================== -->
		
<!-- Footer
      ================================================== -->


<!-- /container -->
 
</body>
</html>