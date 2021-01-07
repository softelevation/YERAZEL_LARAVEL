<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$ch = curl_init();
        //$token = getToken(); // get token to helper

		curl_setopt($ch, CURLOPT_URL, 'https://staging.h.api.crmls.org/RESO/OData/Property?$top=2');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Authorization: Bearer 77a0230dbbe1dd95dbc1e95ed74f80ccccc2c997b832c32458de92fa0f1d077d';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $res = curl_exec($ch);

		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
        curl_close($ch);
        $response = json_decode($res, true);

        return view('front/welcome',compact('response'));
    }
}
