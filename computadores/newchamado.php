<?php
//validação para ter acesso 
session_start();
include_once('banco/conexao.php');
   if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
   {
       unset($_SESSION['login']);
       unset($_SESSION['senha']);
       header('Location: index.php');
   }
?>

<?php

    if(isset($_POST['submit']))
    {
        include_once('banco/conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $departamento = $_POST['departamento'];
        $responsavel = $_POST['responsavel'];
        $prioridade = $_POST['prioridade'];
        $solicitacao = $_POST['solicitacao'];
        $descricao = $_POST['descricao'];
        $data_entrada= $_POST['data_entrada'];
        $data_saida= $_POST['data_saida'];

        $result = mysqli_query($conexao, "INSERT INTO chamados (nome,email,celular,departamento,responsavel,prioridade,solicitacao,descricao,data_entrada,data_saida) 
        VALUES ('$nome','$email','$celular','$departamento','$responsavel','$prioridade','$solicitacao','$descricao','$data_entrada','$data_saida')");

        header('Location: chamados.php');
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<link rel="stylesheet" href="estilo/cadastrar.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="img/foto2.jpg" type="image/x-icon">
<link rel="stylesheet" href="estilo/add.css">
    <title>Adicionar Chamado</title>
</head>

<body>
<?php include_once('menu.php'); ?>





<i class="bi bi-person-circle"></i>
    
  

    <form action="newchamado.php" method="post">
    <h4>
    Adicionando Chamado
</h4>
    <div class="people">
        <img src="img/people.svg " width="40x" alt="logo ">
      </div>


          

          <div class="duplinha">
          <input type="text" id="nome" class="fadeIn second" name="nome" placeholder="Nome do Solicitante" >
         
         <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-mail do Solicitante">
      
          </div>
          <div class="duplinha">
          <input type="text"  id="celular" minlength="9"maxlength="14" class="fadeIn second" name="celular" placeholder="Número de telefone do solicitante">
     
          <input type="text" id="departamento" class="fadeIn second" name="departamento" placeholder="Departamento ou equipe do solicitante">
          </div>
          <div class="duplinha">
          <input type="text" id="responsavel" class="fadeIn second" name="responsavel" placeholder="Suporte responsavel">

          <input type="text" id="descricao" class="fadeIn second" name="descricao" placeholder="Descrição da solicitação ou problema">
           </div>
          
           <div class="duplinha2">
<label for="prioridade">Prioridade:</label>
<select id="prioridade" name="prioridade">
  <option value="alta">Alta</option>
  <option value="media">Média</option>
  <option value="baixa">Baixa</option>
</select>



<label for="solicitacao">solicitação:</label>
<select id="solicitacao" name="solicitacao">
  <option value="problema">Problema</option>
  <option value="duvida">dúvida</option>
  <option value="solicitação_de_serviço">solicitação de serviço</option>
</select>


<label for="entrada"> Entrada</label>
<input type="date" id="data_entrada" class="fadeIn second" name="data_entrada" >
<label for="entrda"> saida</label>
<input type="date" id="data_saida" class="fadeIn second" name="data_saida" >
      </div>

      <div class="custom-btn btn-3">
            <span> 
               
              <input type="submit" name="submit" class="botao" >
              </span>
          </div>
    </form>

 







   










</body>
</html>