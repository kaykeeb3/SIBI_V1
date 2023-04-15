<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "biblioteca_teste";

$mysqli = new mysqli($hostname, $username, $password, $database);
mysqli_set_charset($mysqli, 'utf8');
/*utf8mb4_general_ci como padrão de caracteres no Banco de Dados*/
?> 