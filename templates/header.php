<?php
 include_once("config/url.php");
 include_once("config/process.php");

 
 //limpa mensagem
 if(isset($_SESSION['msg'])){
   $printMsg = $_SESSION['msg'];
   $_SESSION['msg'] = '';
 }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/styles.css">

    <!-- Fonte -->
    <script src="https://kit.fontawesome.com/664a7b0ef2.js" crossorigin="anonymous"></script>
    <!----------->

</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class = "navbar-brand" href="<?= $BASE_URL?>index.php">
            <img src="<?= $BASE_URL?>img/logo.svg" alt="Agenda">
        </a>
        <div>
            <div class = "navbar-nav">
             <a class="nav-link active" id= "home-link" href="<?= $BASE_URL?>index.php">Agenda</a>
             <a class="nav-link active" id= "home-link" href="<?= $BASE_URL?>create.php">Adicionar contato</a>
            </div>
        </div>
      </nav>
    </header>
    