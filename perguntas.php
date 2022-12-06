<?php


session_start();
include "conexao.php";
$sql = "SELECT * FROM perguntas ORDER BY id ASC";
$result = $conexao->query($sql);
//print_r($result);

if(isset($_POST['submit'])){

    include "conexao.php";

    //print_r($_POST['pergunta']);
    $questao = $_POST['pergunta'];

    $result = mysqli_query($conexao, "INSERT INTO perguntas(pergunta)
    VALUES('$questao')");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cadastrar.css"> 
    <title>Formulário | GN</title>
</head>

<body>
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
        <form action="./perguntas.php" method="POST">
        <legend><b>¿! HEY DEV, RESGISTRE UMA PERGUNTA !?</b></legend><br><br>
            <div class="inputBox"><br>
                <center><h5><b>LEMBRE-SE?!</b><br><br>
                    ESTE É UM FORMULARIO PARA DEVS, GARENTA QUE SUAS PERGUNTAS SEJAM RELACIONADAS A:<br>
                </h5><br><h3><b>TECNOLOGIA, PROGRAMAÇÃO OU DESIGN!<b></h3></center>
                    <div class="inputBox">
                    <input type="text" name="pergunta" class="inputUser" required/>
                        <label for="pergunta" class="labelInput">Pergunta:</label>
                    </div><br><br>
                    <center><input type="submit" name="submit" id="submit ">
                    <a href="index.php" class="btn">Voltar</a><center><br>
                    <center><h6>ATENÇÃO: EM QUALQUER MOTIVO DE ERROS CLICK EM VOLTAR ;)!</h6></center>
                    <style> input{border: 1px; border-radius: 0.6em; background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(20, 220, 37));
                        color: #fff;padding:15px; cursor: pointer; text-decoration: none; font-weight: 700; width:30%;}
                    </style>
            </div>
        </form>
    </fieldset>
</div>

<center><table class="table text-white table-bg">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Questao</th>
            <th scope="col">Alternativas</th>
            <th scope="col">Exclua</th>
        </tr>
    </thead>
        <tbody>
            
            <?php
            
            while($linha = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$linha['id']."</td>";
                echo "<td>".$linha['pergunta']."</td>";
                echo "<td width='250px'> <a href='./alternativas.php?pergunta_id=$linha[id]'>Alternativas</a> </td>";
                echo "<td>
                
                <a class='btn btn-sm btn-danger' href='delete.php?id=$linha[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                        <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                    </svg></a>             
                </td>";
            }
            ?>

        </tbody>
    </table></center>
    <style> .table{ margin-top:45%; background-color:rgba(0, 0, 0, 0.6); color: #fff;padding:15px; width:50%;}</style>

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

</body>
</html>