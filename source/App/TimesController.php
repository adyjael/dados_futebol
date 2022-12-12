<?php

namespace Source\App;

use Source\App\Web;
use Source\Models\Leagues;
use Source\Models\Teams;

class TimesController extends Web
{
    public function allTimes()
    {

        $realMadrid = Teams::getTeamPopulares(133738);
        $barcelona = Teams::getTeamPopulares(133739);
        $flamengo = Teams::getTeamPopulares(134287);
        $liverpool = Teams::getTeamPopulares(133602);
        $mancity = Teams::getTeamPopulares(133613);
        
        $popularesTeams = [$realMadrid,$barcelona,$flamengo,$liverpool,$mancity];

        $timesByname = "";
        if (isset($_GET["name"]) && !empty($_GET["name"])) {
            $timesByname = Teams::searchTimesByName($_GET["name"]);
        }

        

        $this->view(
            [
                "header",
                "alltimes",
                "footer"
            ],
            [
                "titulo" => "Times",
                "timesByName" => $timesByname,
                "popularesTeams" => $popularesTeams,
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
            "time",
            "footer"
        ], [
            "titulo" => $time->strTeam,
            "time" => $time,
            "logo" => $time->strTeamBadge,
        ]);
    }
}
