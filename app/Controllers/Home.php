<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Home extends BaseController
{
	protected $productmodel;

	public function __construct()
	{
		$this->productmodel = new ProductModel;
	}

	public function index()
	{
		$data = [
			'title' => 'Indah taman - tukang taman dan tanaman',
			'products' => $this->productmodel->getDataJoin()
		];
		return view('pages/home', $data);
	}

	public function product($id_product = null)
	{
		$data = [
			'title' => 'Indah taman-tukang taman dan tanaman',
			'products' => (isset($id_product)) ? $this->productmodel->getDataJoin($id_product) : $this->productmodel->getDataJoin()
		];
		(isset($id_product)) ? $view =  view('pages/detail', $data) : $view =  view('pages/product', $data);

		return $view;
	}

	public function search($keywordGet)
	{

		$keyword = $this->request->getPost('keyword');
		$data = [
			'title' => 'indah taman - tukang taman profesional',
			'products' => (isset($keywordGet)) ? $this->productmodel->searchWithJoin($keywordGet)  : $this->productmodel->searchWithJoin($keyword)
		];

		return view('pages/product', $data);
	}
}
