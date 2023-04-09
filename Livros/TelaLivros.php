<?php

if (isset( $_GET['busca'] ) ) {
  $pesquisa = $_GET['busca'];
} else {
  $pesquisa = '';
}

include_once('conexao.php');
include_once('categorias.php');

$sql = "SELECT *  FROM livro 
                WHERE titulo LIKE '%$pesquisa%' 
                OR autor LIKE '%$pesquisa%'
                OR quantidade LIKE
                  '%$pesquisa%' ";
                  

$dados = mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8"/> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    
    <link rel="stylesheet" href="https://cdn.es.gov.br/fonts/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="./css/TelaLivros.css" type="text/css" media="all" />
    
    <title>Tela de Livros</title>
    
  </head>
  
  <body>

      <div class="div-verde"></div>
      <div class="div-amarelo"></div>
      
      <form class="div-search" action="" method="GET">
      <input name="busca" class="input-search" type="search" placeholder="Pesquisar ex: Livro..." />
      <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
      
      <select name="menuCategorias" id="selectCategorias">
        <option value="Todos">TODOS</option>
        <option value="Romance">Romance</option>
        <option value="Aventura">Aventura</option>
        <option value="Fantasia">Fantasia</option>
        <option value="Drama">Drama</option>
        <option value="Suspense">Suspense</option>
        <option value="TerrorHorror">Terror/Horror</option>
        <option value="Crônica">Crônica</option>
        <option value="Conto">Conto</option>
        <option value="Poesia">Poesia</option>
        <option value="Biografia">Biografia</option>
        <option value="Nacional">Nacional</option>
        <option value="Material Acadêmico">Material Acadêmico</option>
        <option value="Outros">Outros</option>
      </select>
      </form>
      
      
    <h1 class="categoria-title">Livros</h1>
    
    <div class="livros-list">
     <!-- Os Livros aparecem dentro da livros-list -->
      
      <?php
        $categorias = $_GET['menuCategorias'];
         if ($categorias === 'Todos') {
        
          while ($livro = mysqli_fetch_assoc($dados) ) {
          $livroTitulo = $livro['titulo'];
          $livroAutor = $livro['autor'];
          $livroQuantidade = $livro['quantidade'];
        ?>
        
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
          
        <?php
        }}
          $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Romance') {
          while ($livro = mysqli_fetch_assoc($dadosRomance) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
          ?>
          <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Aventura') {
          while ($livro = mysqli_fetch_assoc($dadosAventura) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Fantasia') {
          while ($livro = mysqli_fetch_assoc($dadosFantasia) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Drama') {
          while ($livro = mysqli_fetch_assoc($dadosDrama) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Suspense') {
          while ($livro = mysqli_fetch_assoc($dadosSuspense) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'TerrorHorror') {
          while ($livro = mysqli_fetch_assoc($dadosTerrorHorror) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Crônica') {
          while ($livro = mysqli_fetch_assoc($dadosCronica) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Conto') {
          while ($livro = mysqli_fetch_assoc($dadosConto) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Poesia') {
          while ($livro = mysqli_fetch_assoc($dadosPoesia) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Biografia') {
          while ($livro = mysqli_fetch_assoc($dadosBiografia) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Nacional') {
          while ($livro = mysqli_fetch_assoc($dadosNacional) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Material Acadêmico') {
          while ($livro = mysqli_fetch_assoc($dadosAcademico) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        $categorias = $_GET['menuCategorias'];
          if ($categorias === 'Outros') {
          while ($livro = mysqli_fetch_assoc($dadosOutros) ) {
            
            $livroTitulo = $livro['titulo'];
            $livroAutor = $livro['autor'];
            $livroQuantidade = $livro['quantidade'];
        ?>
        <div class='container-livro'>
          <div class='livro'>
          <p class='livro-titulo'><?php echo $livroTitulo ?></p>
          <p class='livro-autor'><?php echo $livroAutor ?></p>
          </div>
          <div class='span'>
          <p class='disponivel'>Disponível</p>
          <p class='livro-quantidade'><?php echo $livroQuantidade ?></p>
          </div>
          </div>
        <?php
        }}
        ?>
          
     
    </div>
    
    <div class="footer">
    <div class="div-cadastrar">
    <button class="btn-cadastrarLivro" type="submit"><i class="fa fa-solid fa-folder-open" id="icon-1">Cadastrar Livro</i></button>
    </div>
    <button class="btn-sair" type="submit"><img src="./assets/icon-sair.png" id="icon-2" />Sair</button>  

    </div>
    
   <script src="js/index.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>