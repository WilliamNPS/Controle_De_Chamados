<?php

    if(!empty($_GET['id']))
    {
        include_once('banco/conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM dti WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM dti WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: cadastradocam.php');
   
?>