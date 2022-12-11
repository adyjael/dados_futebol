<?php

use Statickidz\GoogleTranslate;

$tradutor = new GoogleTranslate;


?>


<section class="header_search">

  <h2>Pesquise o seu Jogador favorito</h2>

  <form method="GET" action="<?= URL_BASE ?>">

    <input type="search" name="search" id="jogador" placeholder="Ex: Neymar">

    <button id="btn_player" type="submit">
      Presquisar
    </button>

    <div class="res">

  </form>

</section>



<section class="players_search container">

  <!-- <img width="100%"  src="https://www.zerozero.pt/img/jogadores/68/112468_pri_mirza_mesic.jpg" class="card-img-top" alt="..."> -->

  <div class="row  g-4">
    <?php if (empty($jogadores)) { ?>


      <h3 class="text-white">Jogadores Populares</h3>
      <div id="player-populares mt-5">

        <div class="row">


          <?php foreach ($popularPlayer as $player) : ?>
            <div class="col-md-3 mb-3 player-populares">
              <a href="<?= URL_BASE ?>/player/<?= $player[0]->idPlayer  ?>">
                <img class="img-player lazyload" width="100%" data-src="<?= $player[0]->strRender ? $player[0]->strRender : $player[0]->strThumb  ?>" alt="">
              </a>

              <a href="<?= URL_BASE ?>/player/<?= $player[0]->idPlayer  ?>" class="view-player-details "><?= $player[0]->strPlayer ?></a>
            </div>
          <?php endforeach; ?>
        </div>

      </div>




    <?php } elseif (empty($jogadores["player"])) { ?>

      <h3 class="text-white">Não conseguimos encontrar nemhum jogador com o nome: <span class="fw-bold text-center text-white"><?= $_GET["search"]  ?></span></h3>

      <?php } else {
      foreach ($jogadores["player"] as $player) : ?>

        <div class="col-md-3 mb-3 player-populares">
          <img class="img-player lazyload" width="100%" data-src="<?= $player->strRender ? $player->strRender : $player->strThumb  ?>" alt="">

          <a href="<?= URL_BASE ?>/player/<?= $player->idPlayer  ?>" class="view-player-details "><?= $player->strPlayer ?></a>
        </div>



    <?php endforeach;
    } ?>


  </div>



</section>




