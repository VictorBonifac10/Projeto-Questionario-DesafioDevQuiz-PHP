<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/alternativa.css"> 
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
    <?php
    include "conexao.php";

    if (isset($_POST) && !empty($_POST)) {
        $alter1 = $_POST["1"]; $alter2 = $_POST["2"];
        $alter3 = $_POST["3"]; $alter4 = $_POST["4"]; $alter5 = $_POST["5"];

        $radioCorreto = $_POST["correto"];
        $correta1 = 0; $correta2 = 0;
        $correta3 = 0; $correta4 = 0; $correta5 = 0;
        switch ($radioCorreto) {
            case '1':
                $correta1 = 1;
                break;
            case '2':
                $correta2 = 1;
                break;
            case '3':
                $correta3 = 1;
                break;
            case '4':
                $correta4 = 1;
                break;
            case '5':
                $correta5 = 1;
                break;
        }
        $questao_id = $_POST['pergunta_id'];
        $query = "insert into alternativas(alternativa, pergunta_id, correta)values";
        $value1 = "('$alter1',$questao_id, $correta1)";
        $value2 = "('$alter2',$questao_id, $correta2)";
        $value3 = "('$alter3',$questao_id, $correta3)";
        $value4 = "('$alter4',$questao_id, $correta4)";
        $value5 = "('$alter5',$questao_id, $correta5)";
        $query = $query . $value1 . "," . $value2 . "," . $value3 . "," . $value4 . "," . $value5;
        $resultado = mysqli_query($conexao, $query);
    }

    if (isset($_GET["pergunta_id"]) && !empty($_GET["pergunta_id"])) {
        $questao_id = $_GET["pergunta_id"];
        $query = "select * from perguntas where id = $questao_id";
        $resultado = mysqli_query($conexao, $query);

        $questao = mysqli_fetch_array($resultado)["pergunta"];

        $query = "select * from alternativas where pergunta_id = " . $questao_id;
        $resultAlter = mysqli_query($conexao, $query);
    }
    ?>
    <div class="box">
        <fieldset>
            <legend><b>¿! PERSONALIZE AGORA, E ADICIONE SUAS ALTERNATIVAS !?</b></legend>
                <br><br><center>
                <h2><b>QUESTÃO: <?php echo $questao; ?> ?<b></h2>
                    <form action="alternativas.php?pergunta_id=<?php echo $_GET["pergunta_id"]; ?>" method="post">
                        <input type="hidden" name="pergunta_id" value="<?php echo $_GET["pergunta_id"]; ?>" />
                            <input type="text" name="1" class="inputUser" /><input type="radio" name="correto" value="1"><br>
                                <input type="text" name="2" class="inputUser" /><input type="radio" name="correto" value="2"><br>
                            <input type="text" name="3" class="inputUser" /><input type="radio" name="correto" value="3"><br>
                                <input type="text" name="4"  class="inputUser"/><input type="radio" name="correto" value="4"><br>
                            <input type="text" name="5"  class="inputUser"/> <input type="radio" name="correto" value="5"><br><br>
                <h5><b>AVISO, NÃO SE ESQUECE DE MARCAR A OPÇÃO QUE CONSIDERA VERDADEIRA!<b></h5>
                        <button type="submit" class="btn">Salvar</button>
                    <a href="./perguntas.php" class="btn">Voltar</a><center>
        </fieldset>
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
</body>
</html>