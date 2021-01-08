<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    	$ch = curl_init();
        $token = getToken(); // get token to helper

		curl_setopt($ch, CURLOPT_URL, 'https://staging.h.api.crmls.org/RESO/OData/Property?$top=5');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Authorization: Bearer '.$token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $res = curl_exec($ch);

		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
        curl_close($ch);
        $response = json_decode($res, true);
        //if($response){
            return view('front/welcome',compact('response'));
        //}
    }

    function Details($id){
        $ch = curl_init();
        $token = getToken(); // get token to helper

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://staging.h.api.crmls.org/RESO/OData/Property($id)");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Authorization: Bearer '.$token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $response = json_decode($result, true);
        //if($response){
            return view('front/detail',compact('response'));
        //}
    }
}
