<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planetas</title>
    <link rel="stylesheet" href="./view/css/styleindex.css">
    <link rel="stylesheet" href="./view/css/stylenav.css">
    <link rel="stylesheet" href="./view/css/stylebackground.css">
    <link rel="stylesheet" href="./view/css/stylefooter.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e7b76df996.js" crossorigin="anonymous"></script>
    <?php include_once './view/includes/navbar.php' ?>

    <script src="./view/js/smoothscroll.js"></script>
</head>

<body>
    <article id="article">
        <p>subir</p>
        <div class="conteudo">
            <h2>Sistema Solar</h2>
            <p>O Sistema Solar, localizado na galáxia Via Láctea, consiste no conjunto de planetas, planetas anões e diversos outros astros do Universo, como asteroides, meteoros, cometas, satélites, entre outros. O Sol é a estrela central desse sistema, exercendo intenso domínio gravitacional sobre os demais corpos celestes.</p></br>
            <p>Oferecemos uma experiência imersiva em quatro planetas do nosso sistema solar: Marte, Júpiter, Saturno e Urano, com informações, curiosidades e imagens dos astros que contribuem para a aprendizagem e conhecimento em diversas idades.</p>
            <a href="#main"><button class="btn-explorar">Começar a explorar</button></a>
        </div>
        <img src="./view/imagens/sol.png">
    </article>

    <?php

    /* personaliza os links da navbar de acordo com a página */

    $link = new links;
    $a = "#article";
    $b = "#main";
    $c = "#";
    $link->exibirnav($a, $b, $c);

    include_once './model/modelplanetas.inc.php';

    ?>
    <main id="main">
        <div id="planetas">
            <div class="img">
                <h2>Marte</h2>
                <a href="./view/planeta.php?pagina=0">
                    <img class="marte" src="./view/imagens/marte.png" alt="Imagem do Planeta Marte">
                </a>
            </div>

            <div class="img">
                <h2>Júpiter</h2>
                <a href="./view/planeta.php?pagina=1">
                    <img class="jupiter" src="./view/imagens/jupiter.png" alt="Imagem do Planeta Júpiter">
                </a>
            </div>

            <div class="img">
                <h2>Saturno</h2>
                <a href=" ./view/planeta.php?pagina=2">
                    <img class="saturno" src="./view/imagens/saturno.png" alt="Imagem do Planeta Saturno">
                </a>
            </div>

            <div class="img">
                <h2>Urano</h2>
                <a href="./view/planeta.php?pagina=3">
                    <img class="urano" src="./view/imagens/urano.png" alt="Imagem do Planeta Urano">
                </a>
            </div>
        </div>
    </main>
    <div class="a"></div>
    <?php include_once './view/includes/footer.php' ?>

</body>

</html>