<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
    	$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://staging.h.api.crmls.org/RESO/OData/Property?top=2");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Authorization: Bearer efd1fb89829cd29bbd8e28b7549209162f3fa02faaacb0c0a39fb17c40c5729f';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		echo "<pre>";print_r(json_decode($result));die("hh");
		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
    }
}
