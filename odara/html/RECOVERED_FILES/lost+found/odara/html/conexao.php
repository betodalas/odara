<?php
$link = mysqli_connect("localhost", "odara", "odara", "odara");

if (!$link) {
    echo "Erro: Não é possível conectar-se ao MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Sucesso: Uma conexão adequada ao MySQL foi feita! O banco de dados de dados é ótimo." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
