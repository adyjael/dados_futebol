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

<section class="container team-details">


    <div class="player-sobre pt-3">
        <h3 id="sobre" style="font-size:40px;" class="fw-bold  text-center mt-2 mb-2">Sobre o <?= $PlayerDetails->strPlayer ?></h3>
        <p><?= substr($PlayerDetails->strDescriptionEN, 0, 1200) ?>...</p>
    </div>

    <div class="player-carreiras mt-5" id="">
        <h3 id="carreira" style="font-size:40px;" class="fw-bold  text-center">Carreira</h3>

        <?php if ($PlayerFormerTeams != null) :  ?>
            <div class="row card-player-carreiras">

                <?php foreach ($PlayerFormerTeams as $player) :  ?>

                    <div>
                        <img data-src="<?= Teams::getImageTeanById($player->idFormerTeam) ? Teams::getImageTeanById($player->idFormerTeam) : URL_BASE . "/assets/img/default.webp" ?>" class="card-img-top lazyload" alt="...">
                        <span><?= $player->strJoined ?> - <?= $player->strDeparted ? $player->strDeparted : "Atual" ?></span>
                    </div>

                <?php endforeach;  ?>

            </div>
        <?php else :  ?>

            <p class="text-center">Não encontramos informações suficiente para este jogador</p>

        <?php endif  ?>
    </div>


    <div class="player-premios mt-5" id="">
        <h3 id="premios" style="font-size:40px;" class="fw-bold  text-center mt-2 mb-2">Premios no jogo</h3>

        <?php if ($playerConquistas != null) :  ?>
            <div class="row card-player-carreiras">

                <?php foreach ($playerConquistas as $player) :  ?>

                    <div>
                        <img data-src="<?= $player->strMilestoneLogo ?>" class="card-img-top lazyload" alt="...">
                        <p><?= $player->strTeam ?></p>
                        <span><?= $player->dateMilestone ?></span>
                    </div>

                <?php endforeach;  ?>

            </div>


        <?php else :  ?>

            <p class="text-center">Não encontramos informações suficiente para este jogador</p>

        <?php endif  ?>

    </div>

    <div class="player-contracts mt-5" id="">
        <h3 id="contrtos" style="font-size:40px;" class="fw-bold  text-center mt-2 mb-2">Contratos do <?= $PlayerDetails->strPlayer ?></h3>

        <?php if ($playerContracts != null) :  ?>
            <div class="row card-player-carreiras">

                <?php foreach ($playerContracts as $player) :  ?>

                    <div>
                        <img data-src="<?= $player->strTeamBadge ?>" class="card-img-top lazyload" alt="...">
                        <p><?= $player->strTeam ?></p>
                        <span><?= $player->strYearStart ?> - <?= $player->strYearEnd  ?></span>
                    </div>

                <?php endforeach;  ?>

            </div>


        <?php else :  ?>

            <p class="text-center">Não encontramos informações suficiente para este jogador</p>

        <?php endif  ?>

    </div>
</section>
<div id="artes" class="player-artes d-flex justify-content-center mt-2 row">
    <div class="col-md-6 mb-2">
        <img class="lazyload" width="50%" data-src="<?= $PlayerDetails->strRender  ?>" alt="">
    </div>
    <div class="col-md-6 mb-2">
        <img class="lazyload" width="50%" data-src="<?= $PlayerDetails->strCutout  ?>" alt="">
    </div>
    <div class="col-md-6 mb-2">
        <img class="lazyload" width="100%" data-src="<?= $PlayerDetails->strFanart1  ?>" alt="">
    </div>
    <div class="col-md-6 mb-2">
        <img class="lazyload" width="100%" data-src="<?= $PlayerDetails->strFanart2  ?>" alt="">
    </div>
    <div class="col-md-6 mb-2">
        <img class="lazyload" width="100%" data-src="<?= $PlayerDetails->strFanart3  ?>" alt="">
    </div>
    <div class="col-md-6 mb-2">
        <img class="lazyload" width="100%" data-src="<?= $PlayerDetails->strFanart4  ?>" alt="">
    </div>
    <div class="col-md-12">
        <img class="lazyload" width="100%" data-src="<?= $PlayerDetails->strBanner  ?>" alt="">
    </div>


</div>