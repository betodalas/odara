<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Login Odara</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="css/util.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

<!--===============================================================================================-->

</head>

<body>

	

	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<form class="login100-form validate-form"  action="" method="post"">

					<span class="login100-form-title p-b-26">

						Bem vindo

					</span>

					<span class="login100-form-title p-b-48">
<img src="odara.png"/>

					</span>

<p>Bem vindo <?php echo $_SESSION['username']; ?>!</p>
<p>Esta é uma area segura</p>
<p><b><a href="upload.php">Acessar</a></b></p>
<b><a href="logout.php">Deslogar</a></b>



						<span class="btn-show-pass">

							<i class="zmdi zmdi-eye"></i>

						</span>





					<div class="container-login100-form-btn">

						<div class="wrap-login100-form-btn">

							<div class="login100-form-bgbtn"></div>

					</div>


						</div>


					<div class="text-center p-t-115">

						<span class="txt1">


						</span>



						<a class="txt2" href="#">

					
</div>


				</form>

			</div>

		</div>

	</div>

	



	<div id="dropDownSelect1"></div>

	

<!--===============================================================================================-->

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/animsition/js/animsition.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/bootstrap/js/popper.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/select2/select2.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/daterangepicker/moment.min.js"></script>

	<script src="vendor/daterangepicker/daterangepicker.js"></script>

<!--===============================================================================================-->

	<script src="vendor/countdowntime/countdowntime.js"></script>

<!--===============================================================================================-->

	<script src="js/main.js"></script>



</body>

</html>

