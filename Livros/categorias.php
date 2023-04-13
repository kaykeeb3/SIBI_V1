<?php


$sqlCategoriaRomance = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Romance%'";
$sqlCategoriaAventura = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Aventura%'";
$sqlCategoriaFantasia = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Fantasia%'";
$sqlCategoriaDrama = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Drama%'";
$sqlCategoriaSuspense = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Suspense%'";
$sqlCategoriaTerrorHorror = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Terror%' OR genero_livro LIKE '%Horror%'";
$sqlCategoriaCronica = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Cronica%'";
$sqlCategoriaConto = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Conto%'";
$sqlCategoriaPoesia = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Poesia%'";
$sqlCategoriaBiografia = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Biografia%'";
$sqlCategoriaNacional = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Nacional%'";
$sqlCategoriaAcademico = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Material%' OR genero_livro LIKE '%Academico%'";
$sqlCategoriaOutros = "SELECT nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Outros%'";

$dadosRomance = mysqli_query($mysqli, $sqlCategoriaRomance);
$dadosAventura = mysqli_query($mysqli, $sqlCategoriaAventura);
$dadosFantasia = mysqli_query($mysqli, $sqlCategoriaFantasia);
$dadosDrama = mysqli_query($mysqli, $sqlCategoriaDrama);
$dadosSuspense = mysqli_query($mysqli, $sqlCategoriaSuspense);
$dadosTerrorHorror = mysqli_query($mysqli, $sqlCategoriaTerrorHorror);
$dadosCronica = mysqli_query($mysqli, $sqlCategoriaCronica);
$dadosConto = mysqli_query($mysqli, $sqlCategoriaConto);
$dadosPoesia = mysqli_query($mysqli, $sqlCategoriaPoesia);
$dadosBiografia = mysqli_query($mysqli, $sqlCategoriaBiografia);
$dadosNacional = mysqli_query($mysqli, $sqlCategoriaNacional);
$dadosAcademico = mysqli_query($mysqli, $sqlCategoriaAcademico);
$dadosOutros = mysqli_query($mysqli, $sqlCategoriaOutros);
?>