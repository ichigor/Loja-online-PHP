<?php
  error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha loja</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loja.css">
  </head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Minha Loja</a>
        </div>
        <div class="">
          <ul class="nav navbar-nav">
            <li><a href="produto-formulario.php">Adiciona Produto</a></li>
            <li><a href="produto-lista.php">Produtos</a></li>
            <li><a href="contato.php">Contato</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="principal">
