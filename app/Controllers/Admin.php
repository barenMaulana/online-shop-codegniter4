<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;
use App\Models\GalleryModel;

class Admin extends BaseController
{
    public $modelproduct;
    public $modelgallery;

    public function __construct()
    {
        $this->modelproduct = new ProductModel;
        $this->modelgallery = new GalleryModel;
    }

    public function index()
    {
        $data = [
            'title' => 'INDAH TAMAN | TUKANG TAMAN',
            'products' => $this->modelproduct->getData()
        ];
        return view('admin/index', $data);
    }

    public function searchProduct()
    {
        $data = [
            'title' => 'INDAH TAMAN | TUKANG TAMAN'
        ];

        if ($this->request->getMethod() == 'post') {
            $keyword = $this->request->getPost('keyword');
            $data['products'] = $this->modelproduct->searchProduct($keyword);
        }
        return view('admin/product', $data);
    }

    public function product($category = null)
    {
        $data = [
            'title' => 'INDAH TAMAN | TUKANG TAMAN',
            'products' => (isset($category)) ? $this->modelproduct->getDataCategory($category) : $this->modelproduct->getData()
        ];
        return view('admin/product', $data);
    }

    public function gallery()
    {

        $keyword = $this->request->getPost('keyword');

        $data = [
            'title' => 'Gallery Indah Taman',
            'galleries' => ($this->request->getMethod() == 'post') ?  $this->modelgallery->getData($keyword) : $this->modelgallery->getData()
        ];

        return view('admin/gallery', $data);
    }
}
