<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/stylenav.css">
    <link rel="stylesheet" href="./css/stylebackground.css">
    <link rel="stylesheet" href="./css/styleplaneta.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <?php include_once './includes/navbar.php'; ?>
</head>

<body>
    <?php

    /* personaliza os links da navbar de acordo com a página */

    $link = new links;
    $a = "../#article";
    $b = "../#main";
    $c = "#";
    $link->exibirnav($a, $b, $c);

    include_once '../model/modelplanetas.inc.php';
    $planeta = $_GET['pagina'];
    ?>

    <main>
        <h3><?= $matrizplaneta[$planeta][0] ?></h3>
        <p><?= $matrizplaneta[$planeta][1] ?></p>
        <h4><?= $matrizplaneta[$planeta][2] ?></h4>
        <p><?= $matrizplaneta[$planeta][3] ?></p>
        <img src="<?= $matrizplaneta[$planeta][4] ?>">

    </main>
    
</body>

</html>