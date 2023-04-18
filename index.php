<?php
  include_once('Model/conexao.php');

  if(isset($_POST['usuario']) || isset($_POST['senha'])) {

    if(strlen($_POST['usuario']) === 0) {
      echo "<h1>Preencha seu usuário</h1>";
    } else if(strlen($_POST['senha']) == 0) {
      echo "<h1>Preencha sua senha</h1>";
    } else {

      $usuario = $mysqli->real_escape_string($_POST['usuario']);
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do cógigo: ");

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
          session_start();
        }


        $_SESSION['id'] = $usuario['id'];
        $_SESSION['usuario'] = $usuario['usuario'];
        // Para exibir o nome do usuário quando estiver logado: $_SESSION['nome'] = $nome['nome'];

        header("Location: View/Home/home.php");

      } else {
         echo "<h1 style='margin-top: -590px; font-size: 20px;  color: red; position: fixed;'>Falha ao logar! Usuário ou Senha incorretos</h1>";
      }  
    }
  }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="View/Login/css/style.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1>Faça seu login</h1>
    <form id="singnin"  method="POST"> 
      <input type="text" placeholder="Usuário*" name="usuario" required />
      <i class="fas fa-user iUser"></i>
      <input type="password" placeholder="Senha*" name="senha" required />
      <i class="fas fa-lock iPassword"></i>
      <div class="divCheck">
        <span>Insira suas Crendeciais</span>
      </div>
      <button type="submit">Entrar</button>
    </form>
  </div>
  
  <div class="reseved">
    <h3>Copyright © 2023 - Todos os direitos reservados.</h3>
  </div>


</body>
</html>