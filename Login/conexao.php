<?php
  $username = 'root';
  $password = '';
  $database = 'login';
  $hostname = 'localhost';

  $mysqli = new mysqli($hostname, $username, $password, $database);

  if($mysqli->error) {
    die("Falha ao conectar com o banco de dados: " .$mysqli->error);
  }
?>