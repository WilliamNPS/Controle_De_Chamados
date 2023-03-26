<?php

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

    
include_once('banco/conexao.php');

if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM chamados WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
          
    $nome = $user_data['nome'];
    $email = $user_data['email'];
    $celular = $user_data['celular'];
    $departamento = $user_data['departamento'];
    $responsavel = $user_data['responsavel'];
    $prioridade = $user_data['prioridade'];
    $solicitacao = $user_data['solicitacao'];
    $descricao = $user_data['descricao'];
    $data_entrada = $user_data['data_entrada'];
    $data_saida = $user_data['data_saida'];
        

        }
    }
    else
    {
        header('Location: chamados.php');
    }
}
else
{
    header('Location: chamados.php');
}


?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/add.css">
    <title>Editar Cadastro</title>

</head>
<body>
    <?php
    include_once('menu.php');
     ?>



<form action="salvaredit.php" method="post">
    <h4>
    Editar
</h4>
    <div class="people">
        <img src="img/people.svg " width="40x" alt="logo ">
      </div>


          

          <div class="duplinha">
          <input type="text" id="nome" class="fadeIn second" name="nome"  value="<?php echo "$nome" ?>" placeholder="Nome do Solicitante" >
         
         <input type="text" id="email" class="fadeIn second" name="email" value="<?php echo "$email" ?>" placeholder="E-mail do Solicitante">
      
          </div>
          <div class="duplinha">
          <input type="text"  id="celular" minlength="9"maxlength="14" class="fadeIn second" value="<?php echo "$celular" ?>" name="celular" placeholder="Número de telefone do solicitante">
     
          <input type="text" id="departamento" class="fadeIn second" name="departamento"value="<?php echo "$departamento" ?>" placeholder="Departamento ou equipe do solicitante">
          </div>
          <div class="duplinha">
          <input type="text" id="responsavel" class="fadeIn second" name="responsavel"value="<?php echo "$responsavel" ?>" placeholder="Suporte responsavel">

          <input type="text" id="descricao" class="fadeIn second" name="descricao" value="<?php echo "$descricao" ?>"placeholder="Descrição da solicitação ou problema">
           </div>
          
           <div class="duplinha2">
<label for="prioridade">Prioridade:</label>
<select id="prioridade"  value="<?php echo "$prioridade" ?>" name="prioridade">
  <option value="alta">Alta</option>
  <option value="media">Média</option>
  <option value="baixa">Baixa</option>
</select>



<label for="solicitacao">solicitação:</label>
<select id="solicitacao" value="<?php echo "$solicitacao" ?>"name="solicitacao">
  <option value="problema">Problema</option>
  <option value="duvida">dúvida</option>
  <option value="solicitação_de_serviço">solicitação de serviço</option>
</select>


<label for="entrada"> Entrada</label>
<input type="date" id="data_entrada" value="<?php echo "$data_entrada" ?>"class="fadeIn second" name="data_entrada" >
<label for="entrda"> saida</label>
<input type="date" id="data_saida"  value="<?php echo "$data_saida" ?>" class="fadeIn second" name="data_saida" >
      </div>
      <input type="hidden" name="id" value= "<?php echo $id ?>">
      <div class="custom-btn btn-3">
            <span>
            <input type="submit" name="update" class="botao"  id="update" >
              </span>
          </div>
    </form>

<!--- 
vou deixar aqui vai que um dia eu precise hehehe 
<input type="radio" id="ok" class="fadeIn second"   name="status" value=" ok "  value="ok"//<?php // echo ($status == 'ok') ? 'checked' : '' ; ?> required>
<label for="ok">Ok</label>
<input type="radio" id="manutencao" name="status" class="fadeIn second" value=" manutencao "<?php // echo ($status == 'manutencao') ? 'checked' : '' ;?> placeholder="Status" required>
<label for="manutenção">Manutenção</label>

---->
</body>
</html>