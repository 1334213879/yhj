<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Services\SendService;
use Illuminate\Http\Request;

class LoginController extends Controller {

	/** @var SendService */
	protected $SendService;

	public function __construct(SendService $SendService) {
		$this->SendService = $SendService;
	}
	public function login() {
		return view('home.login.index');
	}
	public function reg() {
		return view('home.login.reg');
	}
	public function verify_code(Request $request) {
		$phone = $request->input('phone');
		$discount = $this->SendService->sendsms($phone);
		var_dump($discount);
		// return view('home.login.reg');
	}

}
