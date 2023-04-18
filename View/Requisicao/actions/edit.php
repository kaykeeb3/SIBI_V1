<?php
include('../../../Controller/protect.php');
include_once('../../../Model/conexao.php');

if (isset($_POST['codigo'])) {
$codigo = $_POST['codigo'];
}else{
$codigo = '';    
}



$sql = "SELECT aluno_req, turma_req, livro_req, autor_req, dataRequisicao_req, dataDevolucao_req FROM requisicao WHERE id like '%$codigo%' ";
$resultado = mysqli_query($mysqli, $sql);


if (mysqli_num_rows($resultado) > 0) {
$row = mysqli_fetch_assoc($resultado);
$nome = $row['aluno_req'];
$turma = $row['turma_req'];
$livro = $row['livro_req'];
$autor = $row['autor_req'];
$dtReq = $row['dataRequisicao_req'];
$dtEntrega = $row['dataDevolucao_req'];
} else {
    $resultado = mysqli_query($mysqli, $sql);
}



?>

<?php
    if ( isset($_POST['submit']) ) {
        $id = $_POST['idreq'];
        $AlunoReq = $_POST['alunoReq'];
        $TurmaReq = $_POST['turmaReq'];
        $LivroReq = $_POST['livroReq'];
        $AutorReq = $_POST['autorReq'];
        $DataRequisicaoReq = $_POST['dataRequisicaoReq'];
        $DataDevolucaoReq = $_POST['dataDevolucaoReq'];

        
      
        $sql = "UPDATE requisicao SET
        aluno_req = '$AlunoReq',
        turma_req = '$TurmaReq',
        livro_req = '$LivroReq',
        autor_req = '$AutorReq',
        dataRequisicao_req = '$DataRequisicaoReq',
        dataDevolucao_req = '$DataDevolucaoReq'
        WHERE id = $id";


$resultados = mysqli_query($mysqli, $sql);


if ($resultado) {
   
    echo "<script>document.addEventListener('DOMContentLoaded', function() {
              document.querySelector('#modal-sucesso').classList.add('show');
              setTimeout(function() {
                  document.querySelector('#modal-sucesso').classList.remove('show');
              }, 2500);
          });
          
     function voltarPaginaAnterior() {
        setTimeout(function() {
          location.href = '../request.php'; 
        }, 2700);
      };
       voltarPaginaAnterior();

          </script>";
} else {
    echo "<script>document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('#modal-fail').classList.add('show');
        setTimeout(function() {
           document.querySelector('#modal-fail').classList.remove('show');
        }, 2500);
     });

     function voltarPaginaAnterior() {
        setTimeout(function() {
          location.href = '../request.php'; 
        }, 2700);
      };
       voltarPaginaAnterior();


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
    <link rel="stylesheet" href="edit.css" type="text/css" />
  </head>
  
  <body>
   <header>
      <div class="bg-green">⠀</div>
      <div class="bg-yellow">⠀</div>
    </header>

    <div class="container">
      <div class="container-form">
          <form action="edit.php" method="POST">
             <div class="form-area">
               <p class="title"> Editar Requisição de Livro </p>
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
                       <input type="hidden" name='idreq' value="<?php echo $codigo ; ?>" > 
                      <label class="label-form"> Aluno* </label>
                      <input type="text" name="alunoReq" value="<?php echo $nome ?>" class="input-form" placeholder="Nome do Aluno" list="alunos" required>
                   </div>
                   <div class="col">
                      <label class="label-form"> Série / Curso* </label>
                      <input type="text" name="turmaReq" value="<?php echo $turma ?>" list="turmas" class="input-form" placeholder="Série / Curso do Aluno" required>
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
                     <input type="text" name="livroReq" value="<?php echo $livro ?>" class="input-form" placeholder="Nome do Livro" list="livros" onchange="buscarAutor()" required>
                  </div>
                  <div class="col">
                     <label class="label-form"> Autor* </label>
                     <input type="text" name="autorReq" value="<?php echo $autor ;?>"class="input-form" placeholder="Autor do Livro" required >
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <label class="label-form"> Data da Requisição* </label>
                     <input type="date" name="dataRequisicaoReq" value="<?php echo $dtReq ?>" class="input-form" required>
                  </div>
                  <div class="col">
                     <label class="label-form"> Data de Devolução* </label>
                     <input type="date" name="dataDevolucaoReq" value="<?php echo $dtEntrega ?>" class="input-form" required>
                  </div>
               </div>

               <button type="submit" name="submit" class="btn-form" > Editar <i class="fa-solid fa-arrow-right-to-bracket"></i> </button>

               <div id="modal-sucesso" class="hide">
                  <div class="modal-conteudo">
                     <h1>Requisição Editada com Sucesso!</h1>
                  </div>
               </div>
               <div id="modal-fail" class="hide">
               <div class="modal-conteudo">
             <h1>Falha em Editar Requisição!</h1>
                     </div>
                 </div>
                   


             </div>
          </form>
          <a href="../request.php" class="btn-exit"> <img id="exitIcon" src="assets/exit-icon.png" alt="exitIcon"></i>Sair </a>
      </div>
   </div>

    <script src="js/CadastroRequisicao.js"></script>

  </body>
</html>

