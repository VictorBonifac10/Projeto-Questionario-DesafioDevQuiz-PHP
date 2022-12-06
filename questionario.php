<?php
include "conexao.php";

$query = "select * from perguntas";
$resultado = mysqli_query($conexao, $query);
?>  
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/symulado.css"> 
    <title>Formulário | GN</title>
</head>
<body>
    <?php include "conexao.php"; ?>
    <header>
        <nav class="navbar navbar-dark bg-dark" style="padding-right: 12%; padding-left: 10%; height: 90px;">
            <div class="container-fluid">
                <a class="navbar-brand fs-2 mpl text-light" href="index.php">
                <b>HELLOWORLD - DEVQUIZ ;)</b>
                </a>
                <ul class="nav justify-content-end">
                <li class="nav-item">
                        <a class="nav-link text-light" style="font-weight: bolder;" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" style="font-weight: bolder;" href="perguntas.php">CADASTRAR</a>
                    </li>
                </ul>                
            </div>
        </nav>
    </header>

    <div class="box">
     <fieldset>
        <legend><b>¿! DEVQUIZ, VOCÊ ESTÁ PREPRADO !?</b></legend>
            <form class="p-3 m-4 p-5 mx-auto" action="resposta.php" method="post" >
            <?php while($linha = mysqli_fetch_array($resultado))
                {
                echo "<td>".$linha['id']."- </td>";
                echo "<td>".$linha['pergunta']."</td><br>";
                echo "<td><hr></td><br>";
            ?> 
            <?php 
                $queryAlter = "select * from alternativas where pergunta_id=".$linha['id']."";
                $resultAlter = mysqli_query($conexao, $queryAlter);
                while($resposta = mysqli_fetch_array($resultAlter))
                {

                echo"<input type='radio' name='correto".$linha['id']."' value=".$resposta['alternativa']."> ".$resposta['alternativa']."";
                echo "<br>";
            ?> <?php } ?> <br> <?php } ?>
    
    <div class="d-flex">
      <button type="submit" class="ms-3 btn btn-success">Salvar</button>
      <button type="button" class="ms-3 btn btn-warning"><a href="index.php" style="text-decoration:none; color: white">Voltar</a></button>
    </div>
    </form>
</form>
</div>

<div class="bg-dark">
        <div class="container">
            <div class="row">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col">
                        <a class="col-md-4 d-flex align-items-start justify-content-start mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <img src="IMG/Imagem1.png" alt="logo" class="bi me-2" width="140" height="105">
                        </a>
                        <br>
                        <p class="text-muted">
                            <font style="vertical-align: inherit;">
                                <font class="text-light" style="vertical-align: inherit;">© 2022 - 2022</font>
                            </font>
                        </p>
                    </div>
                    <ul class="col-md-4 mb-0 text-muted fs-4 list-unstyled d-flex justify-content-end">
                        <li class="ms-3"><a class="link-dark" href="#">
                                <img class="bi" width="35" height="35" src="IMG/icons8-twitter.svg" alt=""></a>
                        </li>
                        <li class="ms-3"><a class="link-dark" href="#">
                                <img class="bi" width="35" height="35" src="IMG/icons8-instagram.svg" alt=""></a>
                        </li>
                        <li class="ms-3"> <a class="link-dark" href="#">
                                <img class="bi" width="35" height="35" src="IMG/icons8-facebook-novo.svg" alt=""></a>
                        </li>
                        <li class="ms-3"><a class="link-dark" href="#">
                                <img class="bi" width="35" height="35" src="IMG/icons8-whatsapp.svg" alt=""></a>
                        </li>
                        <li class="ms-3"><a class="link-dark" href="#">
                                <img class="bi" width="35" height="35" src="IMG/icons8-reproduzir-youtube (1).svg" alt=""></a>
                        </li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>   
</div>
</body>