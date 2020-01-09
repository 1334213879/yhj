<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class Memberontroller extends Controller {

	public function login() {
		$admin = session('admin');
		$menuList = $admin->getMenus();
		return view('admin.index', ['menu' => $menuList]);
	}

}
