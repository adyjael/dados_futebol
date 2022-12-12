<?php

namespace Source\Models;


class Teams
{


    public static function getImageTeanById(int $idTean)
    {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/lookupteam.php?id=$idTean",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: thesportsdb.p.rapidapi.com",
                "X-RapidAPI-Key: 32ea44eca2msh673a0485cbf7033p1e33c6jsn3275a8c5f21a"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = (array) json_decode($response);
        }

        if(isset($result["teams"][0]->strTeamBadge)){
            return $result["teams"][0]->strTeamBadge; 
        }else{
            return "";
        }

    }

    public static function getTeamDetailsById($idTeam)
    {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/lookupteam.php?id=$idTeam",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: thesportsdb.p.rapidapi.com",
                "X-RapidAPI-Key: 32ea44eca2msh673a0485cbf7033p1e33c6jsn3275a8c5f21a"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = (array) json_decode($response);
        }
        return $result;
    }

    public static function getTeamPopulares($idTeam){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/lookupteam.php?id=$idTeam",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: thesportsdb.p.rapidapi.com",
                "X-RapidAPI-Key: 32ea44eca2msh673a0485cbf7033p1e33c6jsn3275a8c5f21a"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = (array) json_decode($response);
        }
        return $result["teams"];
    }

    public static function searchTimesByName(string $teamName)
    {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/searchteams.php?t=$teamName",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: thesportsdb.p.rapidapi.com",
                "X-RapidAPI-Key: 32ea44eca2msh673a0485cbf7033p1e33c6jsn3275a8c5f21a"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = (array) json_decode($response);
        }

        return $result;
    }

    public static function getAllPlayersByTeamId($idTeam)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/lookup_all_players.php?id=$idTeam",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: thesportsdb.p.rapidapi.com",
                "X-RapidAPI-Key: 32ea44eca2msh673a0485cbf7033p1e33c6jsn3275a8c5f21a"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = (array) json_decode($response);
        }

        return $result;
    }

    public static function getLastGamesByTeamId($idTeam)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/eventslast.php?id=$idTeam",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: thesportsdb.p.rapidapi.com",
                "X-RapidAPI-Key: 32ea44eca2msh673a0485cbf7033p1e33c6jsn3275a8c5f21a"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = (array) json_decode($response);
        }

        return $result;
    }
    public static function getNextGamesByTeamId($idTeam)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/eventsnext.php?id=$idTeam",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: thesportsdb.p.rapidapi.com",
                "X-RapidAPI-Key: 32ea44eca2msh673a0485cbf7033p1e33c6jsn3275a8c5f21a"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = (array) json_decode($response);
        }

        return $result;
    }
}
