<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;

class HomeController extends Controller
{
    public function index(){
    	// $ch = curl_init();
        // $token = getToken(); // get token to helper
        // $token = 'c1a5714bef1cc5ed68e1e48e063ee0a22a707949a405bd3043e55e5ab11231c6'; // get token to helper

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

		// $save_val = array();
		// if($response){
			// $save_val = array();
			// foreach($response['value'] as $res_ponse){
				// $save_val[] = array(
									// 'ListingKeyNumeric'=>$res_ponse['ListingKeyNumeric'],'CurrentPrice'=>$res_ponse['CurrentPrice'],
									// 'LotSizeSquareFeet'=>$res_ponse['LotSizeSquareFeet'],'ListOfficeName'=>$res_ponse['ListOfficeName'],
									// 'City'=>$res_ponse['City'],'StateOrProvince'=>$res_ponse['StateOrProvince'],
									// 'PostalCode'=>$res_ponse['PostalCode'],'LotSizeUnits'=>$res_ponse['LotSizeUnits'],
									// 'BedroomsTotal'=>$res_ponse['BedroomsTotal'],'BathroomsFull'=>$res_ponse['BathroomsFull']
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
        // $token = 'c1a5714bef1cc5ed68e1e48e063ee0a22a707949a405bd3043e55e5ab11231c6';

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
}
