<?php

use Source\Models\Player;
use Source\Models\Teams;

if (isset($PlayerDetails["players"]) && !empty($PlayerDetails["players"])) {

    $PlayerDetails = $PlayerDetails["players"][0];
    //$PlayerHonours = Player::getHonoursByPlayerId($PlayerDetails->idPlayer)["honours"];
    $PlayerFormerTeams = Player::getFormerTeamsByPlayerId($PlayerDetails->idPlayer)["formerteams"];
    $playerConquistas = Player::getConquitasByPlayerId($PlayerDetails->idPlayer)["milestones"];
    $playerContracts = Player::getContractsByPlayerId($PlayerDetails->idPlayer)["contracts"];
}



?>

<main id="content" style="height: 286rem;">

    <div id="countryDetails" class="country-details">
        <form>

            <button id="backButton" onClick="JavaScript: window.history.back();" type="button" class="country-details__button">
                Back
            </button>
        </form>

        <?php if ($PlayerDetails != null) :  ?>


            <article class="country-details__article">
                <div class="country-details__img">
                    <img width="560" height="400" src="<?= $PlayerDetails->strThumb ?>" alt="Mauritania">
                </div>
                <div class="country-details__info">
                    <h1 class="country-details__info-title"><?= $PlayerDetails->strPlayer ?></h1>
                    <div class="country-details__info-lists">
                        <ul class="country-details__info-list">
                            <li class="country-details__info-item">
                                <span>Nacionalidade: </span> <?= $PlayerDetails->strNationality ?>
                            </li>
                            <li class="country-details__info-item">
                                <span>Valor no mercado: </span> <?= $PlayerDetails->strSigning ?>
                            </li>
                            <li class="country-details__info-item">
                                <span>Team: </span><?= $PlayerDetails->strTeam ?>
                            </li>
                            <li class="country-details__info-item">
                                <span>Position: </span> <?= $PlayerDetails->strPosition ?>
                            </li>
                            <li class="country-details__info-item">
                                <span>Kit: </span> <?= $PlayerDetails->strKit ?>
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

        <?php else :  ?>

            <p class="text-center">Não consegumos encontrar informações suficientes para este jogador</p>

        <?php endif; ?>


        <article id="Carreiras" class="mt-5">
            <h3 class="text-center">Carreira do <?= $PlayerDetails->strPlayer ?></h3>

            <section id="countriesContainer" class="countries-container mt-5">

                <?php if ($PlayerFormerTeams != null) : ?>
                    <?php foreach ($PlayerFormerTeams as $player) : ?>

                        <article class="countries-container__card none">
                            <img width="100%" src="<?= Teams::getImageTeanById($player->idFormerTeam) ? Teams::getImageTeanById($player->idFormerTeam) : URL_BASE . "/assets/img/default.webp" ?>" alt="Mauritania" loading="lazy">

                            <div class="countries-container__card-info">
                                <h1 class="countries-container__card-title"><?= $player->strFormerTeam ?></h1>
                                <p><?= $player->strJoined ?> - <?= $player->strDeparted ? $player->strDeparted : "Atual" ?></p>
                            </div>
                        </article>

                    <?php endforeach; ?>
                <?php else : ?>

                    <p class="text-center">Não conseguimos encontrar informações suficientes para este jopgador</p>

                <?php endif; ?>



            </section>
        </article>

        <article id="Contratos" class="mt-5">
            <h3 class="text-center">Contratos do <?= $PlayerDetails->strPlayer ?></h3>

            <section id="countriesContainer" class="countries-container mt-5">

                <?php if ($playerContracts != null) :  ?>
                    <?php foreach ($playerContracts as $player) :  ?>


                        <article class="countries-container__card none">
                            <img width="100%" src="<?= $player->strTeamBadge ?>" alt="Mauritania" loading="lazy">

                            <div class="countries-container__card-info">
                                <h1 class="countries-container__card-title"><?= $player->strTeam ?></h1>
                                <p>Inicio: <?= $player->strYearStart ?></p>
                                <p>Fime: <?= $player->strYearEnd  ?></p>
                            </div>
                        </article>


                    <?php endforeach;  ?>
                <?php else : ?>
                    <p class="text-center">Não conseguimos encontrar informações suficientes para este jopgador</p>
                <?php endif; ?>



            </section>
        </article>

        <article id="Premios" class="mt-5">
                <h3 class="text-center">Premios do <?= $PlayerDetails->strPlayer ?></h3>

                <section id="countriesContainer" class="countries-container mt-5">


                <?php if ($playerConquistas != null) : ?>
                    <?php foreach ($playerConquistas as $player) : ?>

                        <article class="countries-container__card none">
                            <img width="100%" src="<?= $player->strMilestoneLogo ?>" alt="Mauritania" loading="lazy">

                            <div class="countries-container__card-info">
                                <h1 class="countries-container__card-title"><?= $player->strTeam ?></h1>
                                <p><?= $player->dateMilestone ?></p>
                            </div>
                        </article>

                    <?php endforeach; ?>
                <?php else : ?>

                    <p class="text-center">Não conseguimos encontrar informações suficientes para este jopgador</p>

                <?php endif; ?>
                    
                    
                </section>
            </article>

            <article id="Artes" class="mt-5 row">
                <h3 class="text-center">Artes do <?= $PlayerDetails->strPlayer ?></h3>
                <div class="col-md-6">
                    <img width="60%"  src="<?=$PlayerDetails->strRender ?>" alt="">
                    
                </div>
                <div class="col-md-6">
                    <img width="60%"  src="<?=$PlayerDetails->strCutout ?>" alt="">
                    
                </div>
                <div class="col-md-6">
                    <img width="100%"  src="<?=$PlayerDetails->strFanart1 ?>" alt="">
                    
                </div>
                <div class="col-md-6">
                    <img width="100%"  src="<?=$PlayerDetails->strFanart2 ?>" alt="">
                    
                </div>
                <div class="col-md-6">
                    <img width="100%"  src="<?=$PlayerDetails->strFanart3 ?>" alt="">
                    
                </div>
                <div class="col-md-6">
                    <img width="100%"  src="<?=$PlayerDetails->strFanart4 ?>" alt="">
                    
                </div>
            

            </article>




    </div>
</main>















