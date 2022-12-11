<?php

namespace Source\App;

use Source\App\Web;
use Source\Models\Leagues;
use Source\Models\Teams;

class TimesController extends Web
{
    public function allTimes()
    {
        $league = "English Premier League";
        if (isset($_GET["league"]) && !empty($_GET["league"])) {
            $league = $_GET["league"];
        }
        $parametros = Leagues::searchAllTimesByLeagueName($league);
        $timesByname = "";
        if (isset($_GET["name"]) && !empty($_GET["name"])) {
            $timesByname = Teams::searchTimesByName($_GET["name"]);
            $parametros = array();
        }





        $this->view(
            [
                "header",
                "alltimes",
                "footer"
            ],
            [
                "titulo" => "Times",
                "times" => $parametros,
                "timesByName" => $timesByname,
            ]
        );
    }

    public function time($data)
    {
        $time = explode("-", $data["team"]);
        $idTeam = end($time);

        $time = Teams::getTeamDetailsById($idTeam)["teams"][0];

        $this->view([
            "header",
            "section_team",
            "time",
            "footer"
        ], [
            "titulo" => $time->strTeam,
            "time" => $time,
            "logo" => $time->strTeamBadge,
        ]);
    }
}
