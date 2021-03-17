<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Stripe\Error\Card;
use Session;
use Stripe\Stripe as Stripe;



class HomeController extends Controller
{
    public function index(){
        $data = array();
        return view('front/welcome',$data);
    }
	
	public function welcome(){
        $data = array();
        return view('front/welcome2',$data);
    }
	
	
	public function stripeReq(Request $request){
		
		$stripe = new \Stripe\StripeClient('sk_test_K65AiH43gsZLMgmjNe5cokMS00qlLBSeMq');
		$token = $stripe->tokens->create([
							  'card' => [
								'number' => '4242424242424242',
								'exp_month' => 1,
								'exp_year' => 2022,
								'cvc' => '314',
							  ],
							]);
	}
	
	
	public function postPaymentStripe(Request $request){
		try {
		$input_post = $request->all();
		$stripe = Stripe::setApiKey('sk_test_K65AiH43gsZLMgmjNe5cokMS00qlLBSeMq');
		$response = \Stripe\Token::create(array(
					  "card" => array(
						"number"    => $request->input('card_number'),
						"exp_month" => $request->input('expire_month'),
						"exp_year"  => $request->input('expire_year'),
						"cvc"       => $request->input('cvc')
					)));
		
		return view('front/welcome2')->with('data',$response);
		 }catch(\Exception $e){
            return redirect('bath');
        }
	}
	

    public function bath(Request $request){
		Session::forget('bathtub');
        $data = array();
        return view('front/bath/list',$data);
    }

    public function shower(Request $request){
		Session::forget('bathtub');
        $data = array();
		$input = array();
		$input['step1'] = url('assets/images/showertub-whitemarble.jpg');
		Session::put('bathtub', $input);
        return view('front/shower/list',$data);
    }
	
	public function bathPost(Request $request){
		$input = $request->all();
		$session_value = Session::get('bathtub');
		if($session_value){
			Session::forget('bathtub');
			$final_array = array_merge($session_value,$input);
			$final_array['page_name'] = "bath";
			Session::put('bathtub', $final_array);
		}else{
			Session::put('bathtub', $input);
		}
		return true;
	}
	
	public function showerPost(Request $request){
		$input = $request->all();
		$session_value = Session::get('bathtub');
		if($session_value){
			Session::forget('bathtub');
			$final_array = array_merge($session_value,$input);
			Session::put('bathtub', $final_array);
		}else{
			Session::put('bathtub', $input);
		}
		return true;
	}

	 public function showerdetail(Request $request){
		
		try {
			$input = array();
			$input['step1'] = url('assets/images/showertub-whitemarble.jpg');
			$input['step2'] = '';
			$input['step3'] = '';
			$input['step4'] = '';
			$input['step5'] = '';
			$input['step6'] = '';
			$input['step7'] = '';
			$session_value = Session::get('bathtub');
			$final_array = array_merge($input,$session_value);
			$final_array['page_name'] = 'shower';
			$final_array['page_name_header'] = 'box-dyob-before-shower';
			return view('front/bath/detail')->with('data',$final_array);
		}catch(\Exception $e){
            return redirect('bath');
        }
    }
	
    public function bathdetail(Request $request){
		
		try {
			$input = array();
			$input['step1'] = '';
			$input['step2'] = '';
			$input['step3'] = '';
			$input['step4'] = '';
			$input['step5'] = '';
			$input['step6'] = '';
			$input['step7'] = '';
			$session_value = Session::get('bathtub');
			$final_array = array_merge($input,$session_value);
			$final_array['page_name'] = 'bathtub';
			$final_array['page_name_header'] = '';
			// return view('front/bath/detail')->with('data',$final_array);
			return view('front/bath/add_on')->with('data',$final_array);
		}catch(\Exception $e){
            return redirect('bath');
        }
    }
	
	public function bathdetails(Request $request){
		
		try {
			$input = array();
				
			$input['step1'] = '';
			$input['step2'] = '';
			$input['step3'] = '';
			$input['step4'] = '';
			$input['step5'] = '';
			$input['step6'] = '';
			$input['step7'] = '';
			$session_value = Session::get('bathtub');
			$final_array = array_merge($input,$session_value);
			$final_array['page_name'] = 'bathtub';
			$final_array['page_name_header'] = '';
			return view('front/bath/detail')->with('data',$final_array);
			// return view('front/bath/add_on');
		}catch(\Exception $e){
            return redirect('bath');
        }
    }
	

	
	public function alcoveShower(){
		try {
			Session::forget('bathtub');
			$data = array();
			$input = array();
			$input['step1'] = url('assets/images/showertub-whitemarble.jpg');
			Session::put('bathtub', $input);
			return view('front/shower/alcoveShower',$data);
		}catch(\Exception $e){
            return redirect('bath');
        }
	}
	

    
}
