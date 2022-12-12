<?php

use Source\Models\Leagues;
use Statickidz\GoogleTranslate;

$leagues = Leagues::listAllLeaguesFootball();
$tradutor = new GoogleTranslate;
?>



<main id="content">
  <div class="actions">
    <form id="searchForm" class="actions__form">
      <label for="searchInput" hidden="">Search for a country…</label>
      <input id="searchInput" name="name" placeholder="Search for a team...">
      <button type="submit"><img src="https://img.icons8.com/glyph-neue/128/search--v1.png" alt="find icon"></button>
    </form>

  </div>



  <section id="countriesContainer" class="countries-container">
    <?php if (!isset($_GET["name"])) :  ?>


      <?php foreach ($popularesTeams as $times) : ?>

        <article class="countries-container__card">
          <img width="264" height="270" src="<?= $times[0]->strTeamBadge ? $times[0]->strTeamBadge : URL_BASE . "/assets/img/player-default.p" ?>" alt="Mauritania" loading="lazy">

          <div class="countries-container__card-info">
            <h1 class="countries-container__card-title"><?= $times[0]->strTeam ?></h1>
            <a class="countries-container__card-link" href="<?= URL_BASE . "/" . $times[0]->strSport . "/" ?><?php $liga = explode(" ", $times[0]->strLeague);
                                                                                                              echo implode("-", $liga) ?>/<?php $time =  explode(" ", $times[0]->strTeam . " " . $times[0]->idTeam);
                                                                                                                              echo implode("-", $time); ?>">View team</a>
          </div>
        </article>



      <?php endforeach; ?>


    <?php else :  ?>



      <?php if (isset($timesByName["teams"]) && !empty($timesByName["teams"])) { ?>
        <?php foreach ($timesByName["teams"] as $times) :  ?>


          <article class="countries-container__card">
            <img width="264" height="270" src="<?= $times->strTeamBadge ? $times->strTeamBadge : URL_BASE . "/assets/img/player-default.p" ?>" alt="Mauritania" loading="lazy">

            <div class="countries-container__card-info">
              <h1 class="countries-container__card-title"><?= $times->strTeam ?></h1>
              <a class="countries-container__card-link" href="<?= URL_BASE . "/" . $times->strSport . "/" ?><?php $liga = explode(" ", $times->strLeague);
                                                                                                            echo implode("-", $liga) ?>/<?php $time =  explode(" ", $times->strTeam . " " . $times->idTeam);
                                                                                                                              echo implode("-", $time); ?>">View team</a>
            </div>
          </article>


        <?php endforeach;
      } else { ?>
        <h4 class="text-center">Não encontramos nenhum time com o nome: <span class=" text-white fw-bold"> <?= isset($_GET["name"]) ? $_GET["name"] : "" ?></span></h4>
      <?php } ?>



    <?php endif;  ?>
  </section>



</main>