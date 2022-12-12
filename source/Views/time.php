<?php

use Source\Models\Teams;

$playerInTeam = Teams::getAllPlayersByTeamId($time->idTeam)["player"];
$lastGames = Teams::getLastGamesByTeamId($time->idTeam)["results"];
$nextGames = Teams::getNextGamesByTeamId($time->idTeam)["events"];


?>


<main id="content" style="height: 190rem;">

    <div id="countryDetails" class="country-details">
        <form>

            <button id="backButton" onClick="JavaScript: window.history.back();" type="button" class="country-details__button">
                Back
            </button>

        </form>

        <article class="country-details__article mb-3">
            <div class="country-details__img">
                <img width="480" height="400" src="<?= $time->strTeamBadge  ?>" alt="Mauritania">
            </div>
            <div class="country-details__info">
                <h1 class="country-details__info-title"><?= $time->strAlternate ? $time->strAlternate : $time->strTeam  ?></h1>
                <div class="country-details__info-lists">
                    <ul class="country-details__info-list">
                        <li class="country-details__info-item">
                            <span>Pais: </span> <?= $time->strCountry ?>
                        </li>
                        <li class="country-details__info-item">
                            <span>Location: </span> <?= $time->strStadiumLocation  ?>
                        </li>
                        <li class="country-details__info-item">
                            <span>Ligas: </span> <?= $time->strLeague ?>
                            <span>,</span> <?= $time->strLeague2 ?>
                            <span>,</span> <?= $time->strLeague3 ?>
                        </li>
                    </ul>

                </div>

                <div class="country-details__border-countries">
                    <h2 class="country-details__border-countries-title">
                        Outros:
                    </h2>
                    <ul class="country-details__border-countries-list">
                        <li class="country-details__border-countries-item">Jogadores</li>
                        <li class="country-details__border-countries-item">Proximos jogos</li>
                        <li class="country-details__border-countries-item">Ultimos jogos</li>
                        <li class="country-details__border-countries-item">Artes</li>
                    </ul>
                </div>

            </div>
        </article>


        <article class="mt-5">
            <h3 class="text-center">Jogadores do <?= $time->strTeam ?></h3>
            <table class="table table-striped mt-5">
                <thead>
                    <tr>

                        <th scope="col">Nome</th>
                        <th scope="col">Posição</th>
                        <th scope="col">Nacionalidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($playerInTeam != null) : ?>
                        <?php for ($i = 0; $i < count($playerInTeam); $i++) : ?>

                            <tr>
                                <td>
                                    <a class="link" target="_blank" href="<?= URL_BASE . "/player/" . $playerInTeam[$i]->idPlayer  ?>"><?= $playerInTeam[$i]->strPlayer  ?></a>
                                </td>
                                <td><?= $playerInTeam[$i]->strPosition  ?></td>
                                <td><?= $playerInTeam[$i]->strNationality  ?></td>
                            </tr>

                        <?php endfor;
                    else : ?>



                    <?php endif; ?>
                </tbody>
            </table>
        </article>


        <article id="nextGames" class="mt-5">
                        <h3 class="text-center">Proximos jogos do <?= $time->strTeam ?></h3>

            <section id="countriesContainer" class="countries-container mt-5">

                <?php if ($nextGames != null) :  ?>
                    <?php foreach ($nextGames as $games) :  ?>


                        <article class=" none1 ">

                            <div class="countries-container__card-info">
                                <h1 class="countries-container__card-title"><?= $games->strEvent ?></h1>
                                <p>Data: <?= date("d/M/Y",strtotime($games->dateEvent))  ?> </p>
                                <p>Hora: <?= date("H:s",strtotime($games->strTime))  ?> </p>
                            </div>
                        </article>


                    <?php endforeach;  ?>
                <?php else : ?>
                    <p class="text-center">Não conseguimos encontrar informações suficientes para este jopgador</p>
                <?php endif; ?>



            </section>

        </article>

        <article id="lastGames" class="mt-5">
                        <h3 class="text-center">Ultimos 5 jogos do <?= $time->strTeam ?></h3>

            <section id="countriesContainer" class="countries-container mt-5">

                <?php if ($lastGames != null) :  ?>
                    <?php foreach ($lastGames as $games) :  ?>


                        <article class=" none1 ">

                            <div class="countries-container__card-info">
                                <h1 class="countries-container__card-title"><?= $games->strAwayTeam  ?> vs <?= $games->strHomeTeam    ?></h1>
                                <p>Data: <?= date("d/m/Y",strtotime($games->dateEvent))  ?> </p>
                                <p>Resultado : <?= $games->intAwayScore  ?> X  <?= $games->intHomeScore  ?></p>
                            </div>
                        </article>


                    <?php endforeach;  ?>
                <?php else : ?>
                    <p class="text-center">Não conseguimos encontrar informações suficientes para este jopgador</p>
                <?php endif; ?>



            </section>

        </article>






    </div>
</main>