<?php

use Statickidz\GoogleTranslate;

$tradutor = new GoogleTranslate;


?>


<main id="content">
  <div class="actions">
    <form id="searchForm">
      <label for="searchInput" hidden="">Search for a country…</label>
      <input id="searchInput" name="search" placeholder="Search for a player...">
      <button id="search" type="submit"><img src="https://img.icons8.com/glyph-neue/128/search--v1.png" alt="find icon"></button>
    </form>

  </div>

  <div class="res text-center"></div>

  <section id="countriesContainer" class="countries-container">
    <?php if (empty($jogadores)) { ?>


      <?php foreach ($popularPlayer as $player) : ?>

        <article class="countries-container__card none">
          <img width="264" height="220" src="<?= $player[0]->strThumb ? $player[0]->strThumb : URL_BASE . "/assets/img/player-default.p" ?>" alt="Mauritania" loading="lazy">

          <div class="countries-container__card-info">
            <h1 class="countries-container__card-title"><?= $player[0]->strPlayer ?></h1>
            <a class="countries-container__card-link" onclick="getIdPlayer()" data-id="<?= $player[0]->idPlayer  ?>" href="<?= URL_BASE ?>/player/<?= $player[0]->idPlayer  ?>">View player</a>
          </div>
        </article>



    <?php endforeach;
    } ?>
  </section>





  <section id="countriesContainer2" class="countries-container">


  </section>



</main>