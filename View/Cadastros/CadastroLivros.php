<?php
   include('../../Controller/protect.php');
   include_once('../../Model/conexao.php');

    if ( isset($_POST['submit']) ) {
        $NomeLivro = $_POST['nomeLivro'];
        $NumLivro = $_POST['numLivro'];
        $AutorLivro = $_POST['autorLivro'];
        $GeneroLivro = $_POST['generoLivro'];
        $QuantLivro = $_POST['quantLivro'];
        
    
         $sql = "INSERT INTO livro
                    (nome_livro, num_livro, autor_livro, genero_livro, quant_livro)
                VALUES 
                    ( '$NomeLivro', '$NumLivro', '$AutorLivro', '$GeneroLivro', '$QuantLivro')";

         
         $resultado = mysqli_query($mysqli, $sql);

         if ($resultado) {
            // Cria um script JavaScript que exibe o modal de sucesso após o envio do formulário
            echo "<script>document.addEventListener('DOMContentLoaded', function() {
                      document.querySelector('#modal-sucesso').classList.add('show');
                      setTimeout(function() {
                          document.querySelector('#modal-sucesso').classList.remove('show');
                      }, 2500);
                  });
                  </script>";
        }    
    }
?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Livros</title>
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/CadastroLivros.css" type="text/css" />
   
  </head>
  
  <body>
   <header>
      <div class="bg-green">⠀</div>
      <div class="bg-yellow">⠀</div>
    </header>

    <div class="container-body">
      <div class="container-form">
          <form action="CadastroLivros.php" method="POST">
             <div class="form-area">
               <p class="title"> Cadastrar Livro </p>
                <div class="row">
                   <div class="col">
                      <label class="label-form"> Nome* </label>
                      <input name="nomeLivro" type="text" class="input-form" placeholder="Nome do Livro" id="nomeks" required>
                   </div>
                   <div class="col">
                     <label class="label-form"  > Número* </label>
                     <input type="text" name="numLivro" class="input-form" placeholder="Número de Identificação do Livro" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                     <label class="label-form"> Autor* </label>
                     <input type="text" name ="autorLivro" class="input-form" placeholder="Autor do Livro" required>
                  </div>
                  <div class="col">
                     <label class="label-form"> Gênero* </label>
                     <input type="text" name="generoLivro" class="input-form" placeholder="Gênero do Livro" required>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <label class="label-form"> Quantidade* </label>
                     <input type="number" name="quantLivro" class="input-form" placeholder="Quantidade de Livro Disponíveis" required>
                  </div>
               </div>

               <button type="submit" name="submit" class="btn-form" > Cadastrar <i class="fa-solid fa-arrow-right-to-bracket"></i> </button>

               <div id="modal-sucesso" class="hide">
                  <div class="modal-conteudo">
                     <h1>Livro cadastrado com Sucesso!</h1>
                  </div>
               </div>
            </div>
         </form>
         <a href="../Livros/TelaLivros.php" class="btn-exit"> <img id="exitIcon" src="assets/exit-icon.png" alt="exitIcon"></i>Sair </a>
      </div>
   </div>


   
    <script src="js/CadastroLivros.js"></script>
  </body>
</html>
    