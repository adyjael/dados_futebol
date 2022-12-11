<?php

namespace Source\Models;


class Player
{

    public static function searchPlayerByName(string $player_name)
    {
            $curl_options = array(
                CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/searchplayers.php?p=$player_name",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_CONNECTTIMEOUT => 5
            );

            $curl = curl_init();
            curl_setopt_array($curl, $curl_options);
            $result = curl_exec($curl);

            $result = (array) json_decode($result);
            return ($result);
        }
    public static function getPlayerDetailsById(int $idPlayer)
    {

        // https://www.thesportsdb.com/api/v1/json/2/lookupplayer.php?id=34145937
        $curl_options = array(
            CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/lookupplayer.php?id=$idPlayer",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);

        $result = (array) json_decode($result);
        return ($result);
    }

    public static function getHonoursByPlayerId(int $idPlayer)
    {

        $curl_options = array(
            CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/lookuphonours.php?id=$idPlayer",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);

        $result = (array) json_decode($result);
        return ($result);
    }
    public static function getFormerTeamsByPlayerId(int $idPlayer)
    {

        $curl_options = array(
            CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/lookupformerteams.php?id=$idPlayer",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);

        $result = (array) json_decode($result);
        return ($result);
    }
    public static function getConquitasByPlayerId(int $idPlayer)
    {

        $curl_options = array(
            CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/lookupmilestones.php?id=$idPlayer",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);

        $result = (array) json_decode($result);
        return ($result);
    }
    public static function getContractsByPlayerId(int $idPlayer)
    {

        $curl_options = array(
            CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/lookupcontracts.php?id=$idPlayer",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);

        $result = (array) json_decode($result);
        return ($result);
    }

    public static function getPopularPlayers($idPayer){

        $curl_options = array(
            CURLOPT_URL => "https://www.thesportsdb.com/api/v1/json/2/lookupplayer.php?id=$idPayer",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $result = curl_exec($curl);

        return (array) json_decode($result);


        
    }



}
