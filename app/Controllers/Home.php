<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('/overview/index');
	}
	
	public function test(){
		return view('test1');
	}

	//--------------------------------------------------------------------

}
