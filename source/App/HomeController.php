<?php

namespace Source\App;

use Source\Models\Player;

class HomeController extends Web
{

    public function index($data)
    {

        $search = "";
      
        if (isset($_GET["search"]) && !empty($_GET["search"])) {

            $search =  Player::searchPlayerByName($_GET["search"]);
 
         }

         $messi = Player::getPopularPlayers(34146370)["players"];
         $neymar = Player::getPopularPlayers(34146371)["players"];
         $cristianoRonaldo = Player::getPopularPlayers(34146304)["players"];
         $mbappe = Player::getPopularPlayers(34162098)["players"];
         $haaland = Player::getPopularPlayers(34169116)["players"];
         $viniJunior = Player::getPopularPlayers(34161324)["players"];
         $kevinDeBruini = Player::getPopularPlayers(34155057)["players"];
 
         $popularPlayer = [$messi,$neymar,$cristianoRonaldo,$mbappe,$haaland,$viniJunior,$kevinDeBruini];

        
        $parametros = [
            "jogadores" => $search,
            "titulo" => "Jogadores populares",
            "popularPlayer" => $popularPlayer
        ];
        $this->view([
            "header",
            "home",
            "footer"
        ],$parametros);

   

    }


    public function teste(){

        $this->view([
            "header",
            "teste",
            "footer"
        ]);

    }



}


//YpNovJ1mqJhwFqDHbcFxuVSJIGq7HOvVQFeC3CFumDLzH95IklZH3f7PLOzX