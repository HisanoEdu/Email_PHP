<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema";

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_error()) {
    die("Conexão falhou: " . mysqli_connect_error());
} else {
    echo "Conexão realizada com sucesso";
}
?>


