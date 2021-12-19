<?php

namespace App\Http\Controllers\Admin\Payment;

use Adisaf\PerfectMoney\PerfectMoney;
use App\Http\Controllers\Controller;
use App\LogPerfectMoneyRequest;
use Illuminate\Http\Request;

class PerfectMoneyControllers extends Controller
{
    public function perfectMoeny(){
    	// PerfectMoney::render();
		return view('perfectmoney');
    	PerfectMoney::render(['PAYMENT_UNITS' => 'EUR'], 'custom_view');

    }
	public function getBalance(){
		$pm = new PerfectMoney;
		$balance = $pm->getBalance();

		if($balance['status'] == 'success')
		{
			return $balance['USD'];
		}
		return $balance;
	}

	private function sendMoney(){
		// Required Fields
		$amount = 10.00;
		$sendTo = 'U1234567';

		// Optional Fields
		$description = 'Optional Description for send money';
		$payment_id = 'Optional_payment_id';

		$pm = new PerfectMoney;

		// Send Funds with all fields
		$sendMoney = $pm->getBalance($amount, $sendTo, $description, $payment_id);
		if($sendMoney['status'] == 'success')
		{
			// Some code here
		}

		// Send Funds with required fields
		$sendMoney = $pm->getBalance($amount, $sendTo);
		if($sendMoney['status'] == 'error')
		{
			// Payment Failed
			return $sendMoney['message'];
		}
	}
 	
 	public function paymenMethodSuccess(Request $request){
		$log = new LogPerfectMoneyRequest();
		$log->success_full_request = json_encode($request->all());
		$log->user_id = auth()->user()->id;
		$log->save();
		dd($request->all());
		 try {
				
		 } catch (\Throwable $th) {
			 //throw $th;
		 }
 		dd($request->all());
 	}
 	public function paymenMethodFail(Request $request){
		$log = new LogPerfectMoneyRequest();
		$log->fail_request = json_encode($request->all());
		$log->user_id = auth()->user()->id;
		$log->save();
		dd($request->all());
 		dd($request->all());
 	}   
	
	 public function paymentStatus(Request $request){
		 dd($request->all());
	 }
}
