<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    //
    public function callApi(){
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://api.polygon.io/v2/aggs/ticker/NFLX/prev?adjusted=true&apiKey=ctWEbnrKnhzNiTT_IgrOpJ6QuCcJIpnN');
        $res =  json_decode($res->getBody());
        $data = $res->results[0];
        $price = "$" . strval($data->c);
        $change = strval(round($data->c - $data->o, 2));
        $change = $change . " (" . strval(round((($change/max($data->o, $data->c)) * 100),2)) . "%)";
        $volume = $data->v;
        $volume = number_format($volume);
        $timestamp = $data->t;
        return view('ir-overview', compact('price', 'change', 'volume', 'timestamp'));
    }
}
