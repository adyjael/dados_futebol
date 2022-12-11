
<section class="header-team container">

    <?php if ($time != null) :  ?>
        <div class="baner-team">
            <div class="team-img">
                <img src="<?= $time->strTeamBadge ?>" alt="">
            </div>
            <div class="team-info">
                <h2><?= $time->strAlternate ? $time->strAlternate : $time->strTeam ?></h2>
                <span><?= $time->strCountry ?> - <?= $time->strTeam ?> - fundado em <?= $time->intFormedYear ?></span>
            </div>
            <nav>
                <ul>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#estadio">Estadio</a></li>
                    <li><a href="#players">Jogadores</a></li>
                    <li><a href="#lastGames">Ultimos jogos</a></li>
                    <li><a href="#nextGames">Proximos jogos</a></li>
                </ul>
            </nav>
        </div>

    <?php else : ?>
            <?= json_encode(array("erro" => "Erro ao encontrar o time"))  ?>
    <?php endif; ?>

</section>
