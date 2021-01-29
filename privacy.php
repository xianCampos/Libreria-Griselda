<?php 
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Griselda</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/logo.jpg">
		<label>Griselda</label>
			<ul>
				<li><a href="#signup"   data-toggle="modal">Registrate</a></li>
				<li><a href="#login"   data-toggle="modal">Iniciar sesion</a></li>
			</ul>
	</div>
	
	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	
	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
	<br>
<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href="index.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product.php"> 			 <i class="icon-th-list"></i>Producto</a></li>
				<li><a href="aboutus.php">   <i class="icon-bookmark"></i>Sobre nosotros</a></li>
				<li><a href="contactus.php"><i class="icon-inbox"></i>Contactenos</a></li>
				<li><a href="privacy.php"><i class="icon-info-sign"></i>Politica de Privacidad</a></li>
				<li><a href="faqs.php"><i class="icon-question-sign"></i>Preguntas Frecuentes</a></li>
			</ul>
	</div>
	

	
	
		<div id="content">
			<legend><h3>Politica de privacidad</h3></legend>
				<p>Griselda respeta la privacidad del visitante, el sitio web griselda.com y los sitios web locales conectados a el, y cuida de proteger su informacion. Esta politica de privacidad le informa que informacion recopilamos sobre usted, como podemos usarla y los pasos a seguir. Nos aseguramos de que este protegido.
				</p>
			<hr>
				<h4>Proteccion de la informacion de los visitantes.</h4>
					<p>Para proteger la informacion que nos proporciona visitando nuestro sitio web, hemos implementado medidas de seguridad varioussecurity. Su informacion personal se encuentra detras de redes seguras y solo es accesible para un numero limitado de personas, que tienen derechos de acceso especiales y estan obligados a mantener la informacion confidencial. Tenga en cuenta que siempre que proporcione informacion personal en linea, existe el riesgo de que terceros puede interceptar y usar esa informacion. Si bien Griselda se esfuerza por proteger la informacion personal y la privacidad de sus usuarios, no podemos garantizar la seguridad de la informacion que divulgue en linea y lo hace bajo su propio riesgo.</p>
			<hr>
				<h4>Use of cookies</h4>
					<p>Una cookie es una pequena cadena de informacion que el sitio web que usted visita transfiere a su computadora con fines de identificacion. Las cookies se pueden utilizar para seguir su actividad en el sitio web y esa informacion nos ayuda a comprender sus preferencias y mejorar su experiencia en el sitio web. Las cookies tambien se utilizan para recordar, por ejemplo, su nombre de usuario y contrasena.</p>
					<p>Puede desactivar todas las cookies, en caso de que prefiera no recibirlas. Tambien puede tener su computadora a mano, siempre que se utilicen cookies. Para ambas opciones, debe ajustar la configuracion de su navegador (como Internet Explorer). Tambien hay productos de software disponibles que pueden administrar las cookies por usted. Tenga en cuenta que cuando configura su computadora para que rechace las cookies, puede limitar la funcionalidad del sitio web que visita y es posible que no tenga acceso a algunas de ellas. Las caracteristicas en el sitio web.</p>
			<hr>
				<h4>Politica en linea</h4>
					<p>La Politica de privacidad no se extiende a nada que sea inherente al funcionamiento de Internet, y por lo tanto mas alla del control de adidas, y no debe aplicarse de ninguna manera contraria a la ley aplicable ni a la regulacion gubernamental. Esta politica de privacidad en linea solo se aplica a la informacion recopilada a traves de nuestro sitio web y no a la informacion recopilada fuera de linea.</p>
			
		</div>
	<br />
</div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyrght &copy; </label>
			<p style="font-size:25px;">Xian 2021</p>
		</div>
			
			<div id="foot">
				<h4>Links</h4>
					<ul>
						<a href="https://www.facebook.com/xan.campos.7"><li>Facebook</li></a>
						
					</ul>
			</div>
	</div>
</body>
</html>