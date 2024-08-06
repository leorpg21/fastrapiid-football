<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TeamsController extends Controller
{
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://v3.football.api-sports.io/teams?league=239&season=2024',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
           'x-rapidapi-key: ace4b6237e1221171748bbb279229deb',
           'x-rapidapi-host: v3.football.api-sports.io'
        ),
        ));
  
        $response = curl_exec($curl);
  
        curl_close($curl);
        $data = json_decode($response, true);
        return view('teams.index', compact('data'));
    }

    public function showTeam($team )
    {
        return view('teams.showteam' , compact('team'));
    }

}
