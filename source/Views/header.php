<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE  ?>/assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="<?php echo isset($logo) ? $logo: URL_BASE. "/assets/img/bola.png"  ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo isset($titulo) ? $titulo : "Futebol"  ?></title>
</head>
<body>
    

    <header class="topo">
        <nav>
            <ul>
                <li><a href=" <?= URL_BASE  ?>">Jogadores</a></li>
                <li><a href="<?= URL_BASE?>/alltimes">Times</a></li>
            </ul>
        </nav>
    </header>



