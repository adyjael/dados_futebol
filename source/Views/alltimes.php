<?php

use Source\Models\Leagues;
use Statickidz\GoogleTranslate;

$leagues = Leagues::listAllLeaguesFootball();
$tradutor = new GoogleTranslate;
?>



<section class="header_search">


  <form method="GET">
    <h5>Ver todos times da liga</h5>
    <select class="form-control" id="league">
      <option value="" selected>Escolha a Liga</option>
      <?php foreach ($leagues["leagues"] as $contry) : ?>
        <option value="<?= URL_BASE ?>/alltimes?league=<?= $contry->strLeague ?>"><?= $contry->strLeagueAlternate ? $contry->strLeagueAlternate :  $contry->strLeague ?></option>
      <?php endforeach; ?>
    </select>
    <h5> Ou Pesquise o nome do seu time</h5>
    <input type="search" name="name" id="time" placeholder="Ex: Barcelona">

    <button id="btn_player" type="submit">
      Presquisar
    </button>



  </form>

</section>


<section class="players_search container">


  <div class="row g-4">
    <?php if (empty($times)) { ?>
      <?php if (isset($timesByName["teams"]) && !empty($timesByName["teams"])) { ?>
        <?php foreach ($timesByName["teams"] as $times) :  ?>



          <div class="col-sm-3">
            <div class="card w-100">
              <img src="<?= ($times->strTeamBadge) ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title  fw-bold"><?= $times->strTeam ?></h5>
                <p class="card-text mt-4">
                  <a class="btn btn-outline-secondary" href="#"><?= $times->strSport ?></a>
                  |                <a class="btn btn-outline-primary" 
                href="<?= URL_BASE."/". $times->strSport."/"?><?php $liga = explode(" ",$times->strLeague); echo implode("-",$liga)?>/<?php $time=  explode(" ",$times->strTeam." ".$times->idTeam ); echo implode("-", $time); ?>">Ver time</a> </p>
                </p>
              </div>
            </div>
          </div>


        <?php endforeach;
      } else { ?>
        <h4 class="text-center">Não encontramos nenhum time com o nome: <span class=" text-white fw-bold"> <?= $_GET["name"] ?></span></h4>
      <?php } ?>

    <?php } elseif (isset($times["countries"]) && !empty($times["countries"])) {
    ?>

      <?php foreach ($times["teams"] as $times) : ?>

        <div class="col-sm-3">
          <div class="card w-100">
            <img src="<?= ($times->strBadge) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title  fw-bold"><?= $times->strLeague ?></h5>
              <p class="card-text mt-4"><a class="btn btn-outline-secondary" href="#"><?= $times->strGender ?></a> |
              <a class="btn btn-outline-primary" 
                href="<?= URL_BASE."/". $times->strSport."/"?><?php $liga = explode(" ",$times->strLeague); echo implode("-",$liga)?>/<?php $time=  explode(" ",$times->strTeam." ".$times->idTeam ); echo implode("-", $time); ?>">Ver time</a> </p>
              </p>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
      <?php } else if (isset($times["teams"]) && !empty($times["teams"])) {

      foreach ($times["teams"] as $times) : ?>

        <div class="col-sm-3">
          <div class="card w-100">
            <img src="<?= ($times->strTeamBadge) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title  fw-bold"><?= $times->strTeam ?></h5>
              <p class="card-text mt-4"><a class="btn btn-outline-secondary" href="#">
                <?= $times->strSport ?></a> | 
                <a class="btn btn-outline-primary" 
                href="<?= URL_BASE."/". $times->strSport."/"?><?php $liga = explode(" ",$times->strLeague); echo implode("-",$liga)?>/<?php $time=  explode(" ",$times->strTeam." ".$times->idTeam ); echo implode("-", $time); ?>">Ver time</a> </p>
            </div>
          </div>
        </div>

    <?php endforeach;
    } else {

    } ?>


  </div>



</section>