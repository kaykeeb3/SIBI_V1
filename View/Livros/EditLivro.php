<?php
include('../../Controller/protect.php');
include_once('../../Model/conexao.php');

if (isset($_POST['codigo'])) {
$codigoId = $_POST['codigo'];
}else{
$codigoId = '';    
}


$sql = "SELECT nome_livro, num_livro, autor_livro, genero_livro, quant_livro FROM livro WHERE id like '%$codigoId%' ";
$resultado = mysqli_query($mysqli, $sql);


if (mysqli_num_rows($resultado) > 0) {
$row = mysqli_fetch_assoc($resultado);
$livroTitulo = $row['nome_livro'];
$LivroNum = $row['num_livro'];
$livroAutor = $row['autor_livro'];
$LivroCategoria = $row['genero_livro'];
$livroQuantidade = $row['quant_livro'];
} else {
    $resultado = mysqli_query($mysqli, $sql);
}

?>

<?php
if ( isset($_POST['submit']) ) {/*Recebendo os novos valores dos inputs*/
        $id = $_POST['idLivro'];
        $Nome = $_POST['nomeLivro'];
        $Num = $_POST['numLivro'];
        $Autor = $_POST['autorLivro'];
        $Categoria = $_POST['generoLivro'];
        $Quant = $_POST['quantLivro'];
        
        /*Inserindo os novos valores*/
        $sql = "UPDATE livro SET
        nome_livro = '$Nome',
        num_livro = '$Num',
        autor_livro = '$Autor',
        genero_livro = '$Categoria',
        quant_livro = '$Quant'
        WHERE id = '$id'";


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
          location.href = 'http://192.168.18.135:8080/Teste%20Biblioteca/Livros/TelaLivros.php?busca=&menuCategorias=Todos'; 
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
          location.href = 'http://192.168.18.135:8080/Teste%20Biblioteca/Livros/TelaLivros.php?busca=&menuCategorias=Todos'; 
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
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edição de Livros</title>
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/EditLivro.css" type="text/css" />
   
  </head>
  
  <body>
   <header>
      <div class="bg-green">⠀</div>
      <div class="bg-yellow">⠀</div>
    </header>

    <div class="container-body">
      <div class="container-form">
          <form action="EditLivro.php" method="POST">
             <div class="form-area">
               <p class="title"> Editar Livro </p>
                <div class="row">
                   <div class="col">
                     <input type="hidden" name='idLivro' value="<?php echo $codigoId ; ?>" />
                     
                      <label class="label-form"> Nome* </label>
                      <input name="nomeLivro" value="<?php echo $livroTitulo ?>" type="text" class="input-form" placeholder="Nome do Livro" id="nomeks" required>
                   </div>
                   <div class="col">
                     <label class="label-form"  > Número* </label>
                     <input type="text" name="numLivro" value="<?php echo $LivroNum ?>" class="input-form" placeholder="Número de Identificação do Livro" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                     <label class="label-form"> Autor* </label>
                     <input type="text" name ="autorLivro" value="<?php echo $livroAutor ?>" class="input-form" placeholder="Autor do Livro" required>
                  </div>
                  <div class="col">
                     <label class="label-form"> Gênero* </label>
                     <input type="text" name="generoLivro" value="<?php echo $LivroCategoria ?>" class="input-form" placeholder="Gênero do Livro" required>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <label class="label-form"> Quantidade* </label>
                     <input type="number" name="quantLivro" value="<?php echo $livroQuantidade ?>" class="input-form" placeholder="Quantidade de Livro Disponíveis" required>
                  </div>
               </div>

               <button type="submit" name="submit" class="btn-form" > Editar <i class="fa-solid fa-arrow-right-to-bracket"></i> </button>

               <div id="modal-sucesso" class="hide">
                  <div class="modal-conteudo">
                     <h1>Livro Editado com Sucesso!</h1>
                  </div>
               </div>
               <div id="modal-fail" class="hide">
                 <div class="modal-conteudo">
                   <h1>Falha em Editar!</h1>
                 </div>
                </div>
            </div>
         </form>
         <a href="../Livros/TelaLivros.php?busca=&menuCategorias=Todos" class="btn-exit"> <img id="exitIcon" src="assets/icon-sair.png" alt="exitIcon" />Sair </a>
      </div>
   </div>

   
    <script src="js/index.js"></script>
  </body>
</html>