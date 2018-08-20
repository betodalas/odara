<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Odara Conciliacao</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<img src="odara.png"/>
<p>Bem vindo <?php echo $_SESSION['username']; ?>!</p>
<p>Esta é uma area segura</p>
<p><a href="upload.html">Acessar</a></p>
<a href="logout.php">Deslogar</a>
</div>
</body>
</html>
