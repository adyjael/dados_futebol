<?php

namespace Source\App;

use Source\Models\Player;

class PlayerController extends Web {



    public function player($data){

        $PlayerDetails = Player::getPlayerDetailsById($data["idPlayer"]);
        $player = $PlayerDetails["players"][0];

        $this->view([
            "header",
            "section_player",
            "player",
            "footer",
        ],[
            "titulo" => $PlayerDetails["players"][0]->strPlayer,
            "PlayerDetails" => $PlayerDetails,
            "player" => $player,
            "banner" => $player->strFanart3,
            "logo" => $PlayerDetails["players"][0]->strCutout ? $PlayerDetails["players"][0]->strCutout : $PlayerDetails["players"][0]->strThumb
        ]);


    }

}