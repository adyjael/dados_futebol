<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE  ?>/assets/css/teste.css">
    <link rel="icon" type="image/x-icon" href="<?php echo isset($logo) ? $logo : URL_BASE . "/assets/img/bola.png"  ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;800&amp;display=swap" rel="stylesheet">
    <title><?php echo isset($titulo) ? $titulo : "Futebol"  ?></title>
</head>

<body>


    <header class="topo">
        <nav>
            <ul>
                <li><a href="#">Jogadores</a></li>
                <li><a href="#">Times</a></li>
            </ul>
        </nav>
    </header>

    <main id="content" style="height: 226rem;">

        <div id="countryDetails" class="country-details">
            <form>

                <button id="backButton" onClick="JavaScript: window.history.back();" type="button" class="country-details__button">
                    Back
                </button>

            </form>
            <article class="country-details__article">
                <div class="country-details__img">
                    <img width="560" height="400" src="https://www.thesportsdb.com/images/media/player/thumb/ino2iw1600892848.jpg" alt="Mauritania">
                </div>
                <div class="country-details__info">
                    <h1 class="country-details__info-title">Messi</h1>
                    <div class="country-details__info-lists">
                        <ul class="country-details__info-list">
                            <li class="country-details__info-item">
                                <span>Nacionalidade: </span> Argentina
                            </li>
                            <li class="country-details__info-item">
                                <span>Valor no mercado: </span> 5666 mil €
                            </li>
                            <li class="country-details__info-item">
                                <span>Team: </span>Barcelona
                            </li>
                            <li class="country-details__info-item">
                                <span>Position: </span> Forward
                            </li>
                            <li class="country-details__info-item">
                                <span>Genero: </span>Male
                            </li>
                        </ul>

                    </div>

                    <div class="country-details__border-countries">
                        <h2 class="country-details__border-countries-title">
                            Outros:
                        </h2>
                        <ul class="country-details__border-countries-list">
                            <li class="country-details__border-countries-item">Carreira</li>
                            <li class="country-details__border-countries-item">Contratos</li>
                            <li class="country-details__border-countries-item">Premios</li>
                            <li class="country-details__border-countries-item">Artes</li>
                        </ul>
                    </div>

                </div>
            </article>


            <article id="Carreiras" class="mt-5">
                <h3 class="text-center">Carreira do Messi</h3>

                <section id="countriesContainer" class="countries-container mt-5">


                    <article class="countries-container__card none">
                        <img width="100%"  src="https://www.thesportsdb.com/images/media/team/badge/28p13b1639480297.png" alt="Mauritania" loading="lazy">

                        <div class="countries-container__card-info">
                            <h1 class="countries-container__card-title">Barcelona</h1>
                          <p>2017-2019</p>
                        </div>
                    </article>


                </section>
            </article>
            <article id="Contratos" class="mt-5">
                <h3 class="text-center">Contratos do Messi</h3>

                <section id="countriesContainer" class="countries-container mt-5">


                    <article class="countries-container__card none">
                        <img width="100%"  src="https://www.thesportsdb.com/images/media/team/badge/28p13b1639480297.png" alt="Mauritania" loading="lazy">
                        
                        <div class="countries-container__card-info">
                            <h1 class="countries-container__card-title">Barcelona</h1>
                            <p>2017-2019</p>
                        </div>
                    </article>
                    
                    
                </section>
            </article>
            <article id="Premios" class="mt-5">
                <h3 class="text-center">Premios do Messi</h3>

                <section id="countriesContainer" class="countries-container mt-5">


                    <article class="countries-container__card none">
                        <img width="100%"  src="https://www.thesportsdb.com/images/media/team/badge/28p13b1639480297.png" alt="Mauritania" loading="lazy">
                        
                        <div class="countries-container__card-info">
                            <h1 class="countries-container__card-title">Barcelona</h1>
                            <p>2017-2019</p>
                        </div>
                    </article>
                    
                    
                </section>
            </article>
            <article id="Artes" class="mt-5 row">
                <h3 class="text-center">Artes</h3>
                <div class="col-md-6">
                    <img width="60%"  src="https://www.thesportsdb.com/images/media/player/render/16x6771630310510.png" alt="Mauritania" loading="lazy">
                    
                </div>
                <div class="col-md-6">
                    <img width="60%"  src="https://www.thesportsdb.com/images/media/player/cutout/9s8opt1628844333.png" alt="Mauritania" loading="lazy">
                    
                </div>
                <div class="col-md-6">
                    <img width="100%"  src="https://www.thesportsdb.com/images/media/player/fanart/vsywsp1421580471.jpg" alt="Mauritania" loading="lazy">
                    
                </div>
                <div class="col-md-6">
                    <img width="100%"  src="https://www.thesportsdb.com/images/media/player/fanart/t8ez191549398257.jpg" alt="Mauritania" loading="lazy">
                    
                </div>
                <div class="col-md-6">
                    <img width="100%"  src="https://www.thesportsdb.com/images/media/player/fanart/uxd9mz1549398266.jpg" alt="Mauritania" loading="lazy">
                    
                </div>
                <div class="col-md-6">
                    <img width="100%"  src="https://www.thesportsdb.com/images/media/player/fanart/icrnu31549398274.jpg" alt="Mauritania" loading="lazy">
                    
                </div>
            

            </article>


        </div>
    </main>