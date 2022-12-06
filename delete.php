<?php

    if(!empty($_GET['id']))
    {
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM perguntas WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM perguntas WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
        
    }
    session_start();
    unset($_SESSION['pergunta']);
    header('Location: perguntas.php');
   
?>