<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

   include_once('conexao.php');

    if ( isset($_POST['submit']) ) {
        $AlunoReq = $_POST['alunoReq'];
        $TurmaReq = $_POST['turmaReq'];
        $LivroReq = $_POST['livroReq'];
        $AutorReq = $_POST['autorReq'];
        $DataRequisicaoReq = $_POST['dataRequisicaoReq'];
        $DataDevolucaoReq = $_POST['dataDevolucaoReq'];

        
      
         $sql = "INSERT INTO requisicao
                     (aluno_req, turma_req, livro_req, autor_req, dataRequisicao_req, dataDevolucao_req)
               VALUES 
                     ( '$AlunoReq', '$TurmaReq', '$LivroReq', '$AutorReq', '$DataRequisicaoReq', '$DataDevolucaoReq')";

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Requisição Livros</title>
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/CadastroRequisicao.css" type="text/css" />
  </head>
  
  <body>
   <header>
      <div class="bg-green">⠀</div>
      <div class="bg-yellow">⠀</div>
    </header>

    <div class="container">
      <div class="container-form">
          <form action="CadastroRequisicao.php" method="POST">
             <div class="form-area">
               <p class="title"> Cadastrar Requisição de Livro </p>
               <?php
                  $alunosDl = "SELECT aluno_req FROM requisicao";
                  $result = $mysqli->query($alunosDl);
                  echo "<datalist id='alunos'>";
                  while($row = $result->fetch_assoc()) {
                     echo "<option value='" . $row["aluno_req"] . "'>";
                  }
                  echo "</datalist>";
                ?>
                <div class="row">
                   <div class="col">
                      <label class="label-form"> Aluno* </label>
                      <input type="text" name="alunoReq" class="input-form" placeholder="Nome do Aluno" list="alunos" required>
                   </div>
                   <div class="col">
                      <label class="label-form"> Série / Curso* </label>
                      <input type="text" name="turmaReq" list="turmas" class="input-form" placeholder="Série / Curso do Aluno" required>
                      <datalist id="turmas">
                        <option>1° Administração </option>
                        <option>1° Informática </option>
                        <option>1° Rede de Computadores </option>
                        <option>1° Segurança do Trabalho </option>
                        <option>2° Administração </option>
                        <option>2° Informática </option>
                        <option>2° Rede de Computadores </option>
                        <option>2° Segurança do Trabalho </option>
                        <option>3° Administração </option>
                        <option>3° Informática </option>
                        <option>3° Rede de Computadores </option>
                        <option>3° Segurança do Trabalho </option>
                      </datalist>
                      
                   </div>
                </div>

                <?php
                  $livrosDl = "SELECT nome_livro FROM livro";
                  $result = $mysqli->query($livrosDl);
                  echo "<datalist id='livros'>";
                  while($row = $result->fetch_assoc()) {
                     echo "<option value='" . $row["nome_livro"] . "'>";
                  }
                  echo "</datalist>";
                ?>
                <div class="row">
                  <div class="col">
                     <label class="label-form"  > Livro* </label>
                     <input type="text" name="livroReq" class="input-form" placeholder="Nome do Livro" list="livros" onchange="buscarAutor()" required>
                  </div>
                  <div class="col">
                     <label class="label-form"> Autor* </label>
                     <input type="text" name="autorReq" class="input-form" placeholder="Autor do Livro" required >
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <label class="label-form"> Data da Requisição* </label>
                     <input type="date" name="dataRequisicaoReq" class="input-form" required>
                  </div>
                  <div class="col">
                     <label class="label-form"> Data de Devolução* </label>
                     <input type="date" name="dataDevolucaoReq" class="input-form" required>
                  </div>
               </div>

               <button type="submit" name="submit" class="btn-form" > Cadastrar <i class="fa-solid fa-arrow-right-to-bracket"></i> </button>

               <div id="modal-sucesso" class="hide">
                  <div class="modal-conteudo">
                     <h1>Requisição cadastrada com Sucesso!</h1>
                  </div>
               </div>
             </div>
          </form>
          <a href="../Home/hindex.php" class="btn-exit"> <img id="exitIcon" src="assets/exit-icon.png" alt="exitIcon"></i>Sair </a>
      </div>
   </div>

    <script src="js/CadastroRequisicao.js"></script>

  </body>
</html>
    







<!--
<datalist id="marcas">
   <option>1° Administração </option>
   <option>1° Informática </option>
   <option>1° Rede de Computadores </option>
   <option>1° Segurança do Trabalho </option>
   <option>2° Administração </option>
   <option>2° Informática </option>
   <option>2° Rede de Computadores </option>
   <option>2° Segurança do Trabalho </option>
   <option>3° Administração </option>
   <option>3° Informática </option>
   <option>3° Rede de Computadores </option>
   <option>3° Segurança do Trabalho </option>
 </datalist>
-->

