<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurlController extends Controller
{
    public function sendRequestListUser()
    {
        $init = curl_init();
        curl_setopt($init, CURLOPT_URL, "https://reqres.in/api/users?page=2");
        curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($init);
        curl_close($init);
        $output = json_decode($output, TRUE);
        return view('curls.listuser', compact('output'));
    }

    public function sendRequestDetailUser()
    {
        $init = curl_init();
        curl_setopt($init, CURLOPT_URL, "https://reqres.in/api/users/2");
        curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($init);
        curl_close($init);
        $output = json_decode($output, TRUE);
        // dd($output['data']);
        return view('curls.detailuser', compact('output'));
    }
}
