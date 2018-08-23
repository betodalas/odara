<?php include("login.php");
 $login_session=$_SESSION['login_user'];
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Painel</title>    
</head>
<body> 
  <h2>Painel do Usuário</h2>
  <p>Essa é a area do Usuário depois que passou pelas validações no arquivo de login</p>
  <table>
    <thead>
      <tr>
        <th>Usuário</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $login_session;?></td>       
      </tr>      
    </tbody>
  </table>
  <div>
    <button><a href="logout.php">Sair</a></button>
  </div>
</div>
</body>
</html>
