<?php

$usuario = 'root';
$senha = 'password';
$database = 'disparadorwhatsapp';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>
