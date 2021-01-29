<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>xian</title>
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
		<label>xian</label>
			
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>
	
			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>
	
	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];
			
								$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = $query->fetch_array ();
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
	
	
	<br>
<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href="home.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product1.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy1.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs1.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>
	
	<br />
	<br />
	
		<div id="content">
			<legend><h3>Política de privacidad</h3></legend>
			<p>XianBoock respeta la privacidad del visitante, el sitio web alphaware.com y los sitios web locales conectados a él, y cuida de proteger su información. Esta política de privacidad le informa qué información recopilamos sobre usted, cómo podemos usarla y los pasos a seguir. Nos aseguramos de que esté protegido.
				</p>
			<hr>
				<h4>Protección de la información de los visitantes.</h4>
					<p>Para proteger la información que nos proporciona visitando nuestro sitio web, hemos implementado medidas de seguridad varioussecurity. Su información personal se encuentra detrás de redes seguras y solo es accesible para un número limitado de personas, que tienen derechos de acceso especiales y están obligados a mantener la información confidencial. Tenga en cuenta que siempre que proporcione información personal en línea, existe el riesgo de que terceros puede interceptar y usar esa información. Si bien XianBoock se esfuerza por proteger la información personal y la privacidad de sus usuarios, no podemos garantizar la seguridad de la información que divulgue en línea y lo hace bajo su propio riesgo.</p>
			<hr>
				<h4>Use of cookies</h4>
					<p>Una cookie es una pequeña cadena de información que el sitio web que usted visita transfiere a su computadora con fines de identificación. Las cookies se pueden utilizar para seguir su actividad en el sitio web y esa información nos ayuda a comprender sus preferencias y mejorar su experiencia en el sitio web. Las cookies también se utilizan para recordar, por ejemplo, su nombre de usuario y contraseña.</p>
					<p>Puede desactivar todas las cookies, en caso de que prefiera no recibirlas. También puede tener su computadora a mano, siempre que se utilicen cookies. Para ambas opciones, debe ajustar la configuración de su navegador (como Internet Explorer). También hay productos de software disponibles que pueden administrar las cookies por usted. Tenga en cuenta que cuando configura su computadora para que rechace las cookies, puede limitar la funcionalidad del sitio web que visita y es posible que no tenga acceso a algunas de ellas. Las características en el sitio web.</p>
			<hr>
				<h4>Política en línea</h4>
					<p>La Política de privacidad no se extiende a nada que sea inherente al funcionamiento de Internet, y por lo tanto más allá del control de adidas, y no debe aplicarse de ninguna manera contraria a la ley aplicable ni a la regulación gubernamental. Esta política de privacidad en línea solo se aplica a la información recopilada a través de nuestro sitio web y no a la información recopilada fuera de línea.</p>
			
				
		</div>
</div>
	<br />
<div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyrght &copy; </label>
			<p style="font-size:25px;">xian. 2019</p>
		</div>
			
			<div id="foot">
				<h4>Links</h4>
					<ul>
						<a href="http://www.facebook.com/alphaware"><li>Facebook</li></a>
						
					</ul>
			</div>
	</div>
</body>
</html>