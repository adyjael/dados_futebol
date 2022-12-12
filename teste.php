<?php

use Source\Models\Player;

    if(isset($_GET["search"]) && !empty($_GET["search"])){

    $player = Player::searchPlayerByName($_GET["search"]);


    }


    echo json_encode($player);