<?php


$sqlCategoriaRomance = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Romance%'";
$sqlCategoriaAventura = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Aventura%'";
$sqlCategoriaFantasia = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Fantasia%'";
$sqlCategoriaDrama = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Drama%'";
$sqlCategoriaSuspense = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Suspense%'";
$sqlCategoriaTerrorHorror = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Terror%' OR genero_livro LIKE '%Horror%'";
$sqlCategoriaCronica = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Cronica%'";
$sqlCategoriaConto = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Conto%'";
$sqlCategoriaPoesia = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Poesia%'";
$sqlCategoriaBiografia = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Biografia%'";
$sqlCategoriaNacional = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Nacional%'";
$sqlCategoriaAcademico = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Material%' OR genero_livro LIKE '%Academico%'";
$sqlCategoriaOutros = "SELECT id, nome_livro, autor_livro, quant_livro FROM livro WHERE genero_livro LIKE '%Outros%'";

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