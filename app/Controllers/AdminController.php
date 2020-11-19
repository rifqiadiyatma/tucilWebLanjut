<?php namespace App\Controllers;

class AdminController extends BaseController
{
	public function index()
	{
		return view('Admin/index');
	}
	
	public function barang()
	{
		return view('Admin/barang');
	}

	public function about()
	{
		return view('Admin/about');
	}
}