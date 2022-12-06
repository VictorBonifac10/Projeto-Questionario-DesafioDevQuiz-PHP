<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/formulario.css"> 
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
                <br><br>
                <center>
                <h4><b>SEJA BEM VINDO NOVO USUÁRIO?!</b><br><br>
                ESTEJE PREPARADO PARA UM NOVO DESAFIO, E CONQUISTE SUA CERTIFICAÇÃO DE <b>SUPERDEV!<b><br><br>
                </h4>
                <h6>
                <b>INSTRUÇÕES:</b> ESTE QUIZ É PERSONALIZAVEL! ADICIONE PERGUNTAS E ALTERNATIVAS E DESAFIE AMIGOS PARA SEU QUIZ!
                </h6>
                <center>
                <br><br>
                <div>
                <a class="btn" href="perguntas.php">CADASTRAR UMA PERGUNTA</a>
                <a class="btn" href="questionario.php">RESPONDER AO QUESTIONÁRIO</a>
                <style>.btn {border: 1px; border-radius: 0.6em; background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(20, 220, 37));
                        color: #fff;padding:15px; cursor: pointer; text-decoration: none; font-weight: 700;}
                </style>
                </div>
            </fieldset>
    </div>
<main>
</main>

    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col">
                        <a href="../H.O.M - HOMEPAGE/bootstrap.html" class="col-md-4 d-flex align-items-start justify-content-start mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

