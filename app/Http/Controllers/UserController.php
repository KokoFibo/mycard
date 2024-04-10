<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($code)
    {
        $client = new Client();
        $url = "https://link.accel365.id/api/get/" . $code;
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        // echo $response->getStatusCode();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];
        // dd($data);
        return view('showdata', [
            'data' => $data
        ]);
    }
}
