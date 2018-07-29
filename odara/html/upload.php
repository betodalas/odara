<!DOCTYPE html>
<html>
<head>
  <title>Upload de arquivo</title>
</head>
<body>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "/var/www/cgi-bin/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "O arquivo ".  basename( $_FILES['uploaded_file']['name']). 
      " carregado com sucesso";
echo "<script language='javascript'>\n";
  echo "alert('sucesso'); window.location.href='conciliacao.html';";
  echo "</script>\n";


    } else{
        echo "Ocorreu um erro, tente novamente";
    }
  }
?>
