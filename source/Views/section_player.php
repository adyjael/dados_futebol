
<section class="header-team container">

    <?php if ($player != null) :  ?>
        <div class="baner-team">
            <div class="team-img">
                <img width="100%" src="<?= $player->strRender ? $player->strRender: $player->strTumb ?>" alt="">
            </div>
            <div class="team-info">
                <h2><?= $player->strPlayer ?></h2>
                <span><?= $player->strNationality ?> - <?= $player->strTeam ?></span>
            </div>
            <nav>
                <ul>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#carreira">Carreira</a></li>
                    <li><a href="#premios">Premios</a></li>
                    <li><a href="#contrtos">Contratos</a></li>
                    <li><a href="#artes">Artes</a></li>
                </ul>
            </nav>
        </div>

    <?php else : ?>
            <?= json_encode(array("erro" => "Erro ao encontrar o time"))  ?>
    <?php endif; ?>

</section>
