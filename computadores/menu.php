
<?php


include_once('banco/conexao.php');
   if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
   {
       unset($_SESSION['login']);
       unset($_SESSION['senha']);
       header('Location: index.php');
   }

   //Codigo pra registrar os dados 
   $sql ="SELECT * FROM dti ORDER BY id DESC";
   $result = $conexao -> query ($sql);
//////////////////////////////////////////////////////
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 
<link rel="stylesheet" href="estilo/estilo.css">
  <link rel="shortcut icon" href="img/login.css" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img class="navbar-brand"  src="img/logo.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="cadastradocam.php">Cadastrado|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastrarcam.php">Cadastrar</a>
      </li>
      
      
    </ul>
    <span class="navbar-text ">
      Controle de Computadores CAM
    </span>


    
   

  </div>
  <a  class="sair" href="logout.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg></a>
</nav>











</body>
</html>