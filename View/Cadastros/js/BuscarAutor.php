<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include_once('../../../Model/conexao.php');
   

if (isset($_POST["livroReq"])) {
  $livro = $_POST["livroReq"];

  $sql = "SELECT autor_livro FROM livro WHERE nome_livro = '$livro'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["autor_livro"] !== null) {
        echo $row["autor_livro"];
      } else {
        echo "";
      }
    }
  } else {
    echo "";
  }
} else {
  echo "";
}
