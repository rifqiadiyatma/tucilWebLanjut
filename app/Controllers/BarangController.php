<?php namespace App\Controllers;

class BarangController extends BaseController
{
	public function index()
	{
		echo view('Barang/index_brg');
    }
    
    public function detail1()
	{
		echo view('Barang/detail_barang1');
    }

    public function detail2()
    {
        echo view('Barang/detail_barang2');
    }

    public function detail3()
    {
        echo view('Barang/detail_barang3');
    }
    
	
}