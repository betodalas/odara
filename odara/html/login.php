<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Área de login</title>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Usuarios ou senha incorretos</h3>
<br/>Clique aqui para <a href='login.php'>logar</a></div>";
	}
    }else{
?>
<p>Não tem cadastro? <a href='registration.php'>Cadastre-se aqui</a></p>
</div>
<?php } ?>
</body>
</html>

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



					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">

                                                <input class="input100" type="text" name="username" placeholder="Username" required />


						<span class="focus-input100" data-placeholder=""></span>

					</div>



					<div class="wrap-input100 validate-input" data-validate="Enter password">

						<span class="btn-show-pass">

							<i class="zmdi zmdi-eye"></i>

						</span>

                                                <input class="input100" type="password" name="password" placeholder="" required />

						<span class="focus-input100" data-placeholder="Password"></span>

					</div>



					<div class="container-login100-form-btn">

						<div class="wrap-login100-form-btn">

							<div class="login100-form-bgbtn"></div>
                             <button class="login100-form-btn" name="sumit" type="sumit">Enviar</button>

					</div>


						</div>


					<div class="text-center p-t-115">

						<span class="txt1">


						</span>



						<a class="txt2" href="#">

					
<p>Não tem cadastro? <a href='registration.php'>Cadastre-se aqui</a></p>
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
