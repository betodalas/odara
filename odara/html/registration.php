<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
header("Location:login.php");
}
    }else{
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

						Cadastro

					</span>

					<span class="login100-form-title p-b-48">
<img src="odara.png"/>

					</span>



					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">

                                                <input class="input100" type="text" name="username" placeholder="Usuario" required />


						<span class="focus-input100" data-placeholder=""></span>

					</div>



					<div class="wrap-input100 validate-input" data-validate="Enter password">

						<span class="btn-show-pass">

							<i class="zmdi zmdi-eye"></i>

						</span>

                                                <input class="input100" type="password" name="password" placeholder="" required />

						<span class="focus-input100" data-placeholder="Senha"></span>

					</div>

                                        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">

                                                <input class="input100" type="text" name="email" placeholder="Email" required />


                                                <span class="focus-input100" data-placeholder=""></span>

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


<?php } ?>
</body>

</html>
