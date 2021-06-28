<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Client;
use App\Models\ProductDetail;
use Auth;
Use Redirect;

class HomeController extends Controller
{
    public function index(){
    	// $ch = curl_init();
        // $token = getToken(); // get token to helper
        // $token = '16680cbcfd5bb26c44ae3484a93370c1fe4eeb43637ef31fd9d4d2f579dabc3d'; // get token to helper

		// curl_setopt($ch, CURLOPT_URL, 'https://staging.h.api.crmls.org/RESO/OData/Property?$top=5');
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

		// $headers = array();
		// $headers[] = 'Accept: application/json';
		// $headers[] = 'Authorization: Bearer '.$token;
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // $res = curl_exec($ch);

		// if (curl_errno($ch)) {
		    // echo 'Error:' . curl_error($ch);
		// }
        // curl_close($ch);
        // $response = json_decode($res, true);
		
		

		// if($response){
			// $save_val = array();
			// foreach($response['value'] as $res_ponse){
				// $save_val[] = array(
									// 'ListingKeyNumeric'=>$res_ponse['ListingKeyNumeric'],'CurrentPrice'=>$res_ponse['CurrentPrice'],
									// 'LotSizeSquareFeet'=>$res_ponse['LotSizeSquareFeet'],'ListOfficeName'=>$res_ponse['ListOfficeName'],
									// 'City'=>$res_ponse['City'],'StateOrProvince'=>$res_ponse['StateOrProvince'],
									// 'PostalCode'=>$res_ponse['PostalCode'],'LotSizeUnits'=>$res_ponse['LotSizeUnits'],
									// 'BedroomsTotal'=>$res_ponse['BedroomsTotal'],'BathroomsFull'=>$res_ponse['BathroomsFull'],
									// 'Longitude'=>$res_ponse['Longitude'],'Latitude'=>$res_ponse['Latitude']
					// );
				
			// }
			// Product::insert($save_val);
			// $respons_e = $save_val; 
		// }
		$respons_e = Product::all()->toArray();
        
		return view('front/welcome',compact('respons_e'));
    }

    function Details($id){
        // $ch = curl_init();
        // $token = getToken(); // get token to helper
        // $token = 'e5a4b6c487d16d566b0857691d21a8190d080e63fbc5cacd8604de54222a3220';

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, "https://staging.h.api.crmls.org/RESO/OData/Property($id)");
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        // $headers = array();
        // $headers[] = 'Accept: application/json';
        // $headers[] = 'Authorization: Bearer '.$token;
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // $result = curl_exec($ch);
        // if (curl_errno($ch)) {
            // echo 'Error:' . curl_error($ch);
        // }
        // curl_close($ch);

        // $res_ponse = json_decode($result, true);
		
		// echo '<pre>';
		// print_r($res_ponse);
		// die('sssssssssssss');
		
		// $save_val = array(
									// 'ListingKeyNumeric'=>$res_ponse['ListingKeyNumeric'],'CurrentPrice'=>$res_ponse['CurrentPrice'],
									// 'City'=>$res_ponse['City'],'StateOrProvince'=>$res_ponse['StateOrProvince'],
									// 'PostalCode'=>$res_ponse['PostalCode'],'LotSizeSquareFeet'=>$res_ponse['LotSizeSquareFeet'],
									// 'LotSizeUnits'=>$res_ponse['LotSizeUnits'],'BedroomsTotal'=>$res_ponse['BedroomsTotal'],
									// 'BathroomsFull'=>$res_ponse['BathroomsFull'],'PublicRemarks'=>$res_ponse['PublicRemarks'],
									// 'Cooling'=>$res_ponse['Cooling'],'HighSchoolDistrict'=>$res_ponse['HighSchoolDistrict'],
									// 'ArchitecturalStyle'=>$res_ponse['ArchitecturalStyle'],'ListAgentFirstName'=>$res_ponse['ListAgentFirstName'],
									// 'ListAgentLastName'=>$res_ponse['ListAgentLastName']
					// );
		
		$response = ProductDetail::where('ListingKeyNumeric',$id)->first()->toArray();
		
        if($response){
            return view('front/detail',compact('response'));
        }
    }
	
	function imageurl($id){
		$ch = curl_init();
        // $token = getToken(); // get token to helper
        $token = 'fedcb978bbc610709d7f251e63039e852c19277ff4fe3a9c010d301ead742996';
		// https://staging.h.api.crmls.org/RESO/OData/Property($id)
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://staging.h.api.crmls.org/RESO/OData/Property($id)/Media");
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

        $res_ponse = json_decode($result, true);
		
		echo '<pre>';
		print_r($res_ponse);
		die;
		
	}
	
	function login(){
		return view('login');
	}
	
	
	function loginPost(Request $request){
		$userdata = array(
			'email'     => $request->email,
			'password'  => $request->password
		);
		if(Auth::attempt($userdata)) {
			return Redirect::to('dashboard');
		} else {
			return Redirect::to('login')->with('invalid_login','Invalid email or password');
		}
	}
	
	function googleMapGet(Request $request){
		$input = $request->url_name;
		return '<iframe id="setGoogleMap" class="w-100" src="'.$input.'" frameborder="0" scrolling="no"></iframe>';
	}
	
	function dashboard(){
		$client = Client::all();
		return view('front/dashboard')->with('clients',$client);
	}
	
	function client(){
		$client = Client::all();
		return view('front/client')->with('client',$client);
	}
	
	function showing(){
		return view('front/showing');
	}
	
	function openHouses(){
		return view('front/openHouses');
	}
	
	function rebate(){
		$respons_e = Product::all()->toArray();
		return view('front/rebate',compact('respons_e'));
	}
	
}
