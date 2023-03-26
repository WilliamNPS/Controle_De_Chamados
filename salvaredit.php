<?php
    // isset -> serve para saber se uma variável está definida
    include_once('banco/conexao.php');

    if(isset($_POST['update']))
    {       
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $departamento = $_POST['departamento'];
        $responsavel = $_POST['responsavel'];
        $prioridade = $_POST['prioridade'];
        $solicitacao = $_POST['solicitacao'];
        $descricao = $_POST['descricao'];
        $data_entrada = $_POST['data_entrada'];
        $data_saida = $_POST['data_saida'];
            
            
     $sqlupdate = "UPDATE chamados
SET nome='$nome',email='$email',celular='$celular',departamento='$departamento',responsavel='$responsavel',
prioridade='$prioridade',solicitacao='$solicitacao',descricao='$descricao',data_entrada='$data_entrada',data_saida='$data_saida' WHERE id = '$id'";

            
        $result = $conexao->query($sqlupdate);
    }
    
    header('Location: chamados.php');
?>    