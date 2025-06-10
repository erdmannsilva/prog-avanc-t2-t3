<?php
require_once("db.php");
require_once("globals.php");

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width. initial-scale=1.0">
<title>Filmes</title>
<link rel="short icon" href="img/logo.ico">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-
bootstrap/5.2.3/css/bootstrap.css">

<!-- CSS -->
<link rel="stylesheet" href="css/styles.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-
bootstrap/5.2.3/css/bootstrap.css">

<!-- Font Awesome -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/6.3.0/css/all.min.css" integrity="sha512-

SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk

/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-
referrer" />

</head>
<body>
<header>
<nav id="main-navbar" class="navbar navbar-expand-lg">
<a href="<?= $BASE_URL ?>" class="navbar-brand">

<img src="<?= $BASE_URL ?>img/logo.svg" alt="Filmes" id="logo">
<span id="filmes-title">Filmes</span>
</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-
target="#navbar" aria-controls="navbar" aria-expanded="false" aria-
label="Toggle navigation">

<i class="fas fa-bars"></i>
</button>

<form action="<?= $BASE_URL ?>search.php" method="GET" id="search-
form" class="form-inline my-2 my-lg-0">

<input type="text" name="q" id="search" class="form-control mr-sm-2"
type="search" placeholder="Buscar Filmes" aria-label="Search">
<button class="btn my-2 my-sm-0" type="submit">
<i class="fas fa-search"></i>
</button>
</form>
<div class="collapse navbar-collapse" id="navbar">
<ul class="navbar-nav">
<li class="nav-item">
<a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar /
Cadastrar</a>
</li>
</ul>
</div>
</nav>
</header>

