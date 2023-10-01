<?php
$host = "localhost";
$user = "root"; // Usuário padrão do XAMPP
$senha = "";   // Senha padrão do XAMPP
$banco = "DBCadUser"; // Nome do banco de dados

$conn = mysqli_connect($host, $user, $senha, $banco);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
