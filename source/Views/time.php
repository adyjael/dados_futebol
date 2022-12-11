<?php

use Source\Models\Teams;

$playerInTeam = Teams::getAllPlayersByTeamId($time->idTeam)["player"];
$lastGames = Teams::getLastGamesByTeamId($time->idTeam)["results"];
$nextGames = Teams::getNextGamesByTeamId($time->idTeam)["events"];


?>





<section class="container team-details">


    <div class="team-sobre pt-3" id="sobre">
        <h3 class="fw-bold">Sobre o <?= $time->strTeam ?></h3>
        <p><?= $time->strDescriptionPT ? $time->strDescriptionPT : $time->strDescriptionEN  ?></p>
    </div>

    <div id="estadio" class="mt-5">
        <h3 class="fw-bold">Estadio do <?= $time->strTeam  ?></h3>

        <div class="estadio row">

            <div class="col-lg-6">
                <p>
                    <?= substr($time->strStadiumDescription, 0, 1400) . "..." ?>
                </p>
            </div>
            <div class="col-lg-6">
                <img width="100%" src="<?= $time->strStadiumThumb  ?>" alt="">
            </div>
        </div>

    </div>

    <div id="players" class="mt-5">
        <h3 class="fw-bold">Jogadores do <?= $time->strTeam  ?></h3>
        <table class="table table-striped">
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
                                <!-- <img width="50px" src="<?= $playerInTeam[$i]->strCutout ? $playerInTeam[$i]->strCutout : $playerInTeam[$i]->strThumb  ?>" alt=""> -->
                            <a class="link" target="_blank" href="<?= URL_BASE . "/player/" . $playerInTeam[$i]->idPlayer  ?>"><?= $playerInTeam[$i]->strPlayer  ?></a></td>
                            <td><?= $playerInTeam[$i]->strPosition  ?></td>
                            <td><?= $playerInTeam[$i]->strNationality  ?></td>
                        </tr>

                    <?php endfor;
                else : ?>



                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-5" id="lastGames">
        <h3 class="fw-bold">Ultimos jogos</h3>
        <div class="historico">

            <div class="games w-50">

                <?php if ($lastGames != null) :  ?>


                    <?php foreach ($lastGames as $games) :  ?>
                        <table width="100%" class="mb-2" align="center" bgcolor="#ffffff" border="0" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr align="center" bgcolor="#DAA520">
                                    <th width="42%" height="24px">
                                        <font face="Segoe UI"><?= $games->strAwayTeam ?></font>
                                    </th>
                                    <th width="16%" bgcolor="#191970">
                                        <font face="Verdana" color="#E0FFFF"><a href="<?= URL_BASE . "/games/$games->idEvent" ?>"><?= $games->intAwayScore ?> x <?= $games->intHomeScore ?></a></font>
                                    </th>
                                    <th width="42%" height="24px">
                                        <font face="Segoe UI"><?= $games->strHomeTeam  ?></font>
                                    </th>
                                </tr>

                        </table>

                    <?php endforeach;  ?>



                <?php else :  ?>


                    erro

                <?php endif;  ?>

            </div>

        </div>

    </div>
    <div class="mt-5" id="nextGames">
        <h3 class="fw-bold">Proximos jogos</h3>
        <div class="historico">

            <div class="games row">

                <?php if ($nextGames != null) :  ?>

                    <?php foreach ($nextGames as $games) : ?>

                        <div class="col-md-2 mt-2">

                            <div class="card w-100 h-100" style="max-width: 18rem;">
                                <a href="<?= URL_BASE ?>/games/<?= $games->idEvent ?>">
                                    <img src="<?= $games->strThumb ? $games->strThumb : URL_BASE ."/assets/img/default.webp"?>" class="card-img-top" alt="">
                                </a>
                                <div class="card-body">
                                    <span class="card-title  fw-bold"><?= $games->strEvent ?> </span> <br>
                                    <span class="card-text mt-4"><?= $games->dateEvent  ?></span>
                                </div>
                            </div>
                        </div>


                    <?php endforeach; ?>

                <?php else :  ?>
                    eror
                <?php endif;  ?>

            </div>

        </div>

    </div>




</section>
<pre>
    <?php

    if ($nextGames != null) {
        print_r($nextGames);
    }
    ?>
</pre>
<pre>
    <?php

    if ($time != null) {
        print_r($time);
    }
    ?>
</pre>