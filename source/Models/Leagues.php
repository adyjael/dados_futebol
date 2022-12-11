<?php

namespace Source\Models;


class Leagues
{

    public static function getLeaguesDetailsById(int $idLeague)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/lookupleague.php?id=$idLeague",
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

    public static function searchAllTimesByLeagueName(string $leagueName)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/search_all_teams.php?l=$leagueName",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
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
    public static function getAllContrys()
    {
        $curl_options = array(
            CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/all_countries.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_CUSTOMREQUEST => 'GET',
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);

        $result = (array) json_decode($result);

        return $result;
    }

    public static function listAllLeaguesFootball()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://thesportsdb.p.rapidapi.com/all_leagues.php?s=Soccer",
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
