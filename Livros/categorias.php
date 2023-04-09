<?php


$sqlCategoriaRomance = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Romance%'";
$sqlCategoriaAventura = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Aventura%'";
$sqlCategoriaFantasia = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Fantasia%'";
$sqlCategoriaDrama = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Drama%'";
$sqlCategoriaSuspense = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Suspense%'";
$sqlCategoriaTerrorHorror = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Terror%' OR categoria LIKE '%Horror%'";
$sqlCategoriaCronica = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Cronica%'";
$sqlCategoriaConto = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Conto%'";
$sqlCategoriaPoesia = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Poesia%'";
$sqlCategoriaBiografia = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Biografia%'";
$sqlCategoriaNacional = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Nacional%'";
$sqlCategoriaAcademico = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Material Academico%'";
$sqlCategoriaOutros = "SELECT titulo, autor, quantidade FROM livro WHERE categoria LIKE '%Outros%'";

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