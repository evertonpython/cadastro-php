<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "projeto";

try {
    $conexao = new PDO("mysql:host=$servidor; dbname=$db", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $erro) {
    echo "A conexão falhou!" .$erro->getMessage();
}
?>


