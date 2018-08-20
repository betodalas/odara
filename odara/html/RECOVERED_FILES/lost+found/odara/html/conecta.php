 $servidor="localhost";
    $usuario="blogo867_odara";
    $senha="eugfuf@337fg";
    $bancodedados="blogo867_odara";

    $mysqli=new mysqli($servidor,$usuario,$senha,$bancodedados);

    if(mysqli_connect_errno()){
        die("Houve um erro:".mysqli_connect_errno());
        exit();
    }
