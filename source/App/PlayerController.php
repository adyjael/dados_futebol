<?php

namespace Source\App;

use Source\Models\Player;

class PlayerController extends Web {



    public function player($data){

        $id = (int) $data["idPlayer"];
    
        $PlayerDetails = Player::getPlayerDetailsById($id);
        $player = $PlayerDetails["players"][0];


        $this->view([
            "header",
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