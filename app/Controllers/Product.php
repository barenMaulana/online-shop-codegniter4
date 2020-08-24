<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productmodel;

    public function __construct()
    {
        $this->productmodel = new ProductModel;
    }

    public function index()
    {
        helper(['form']);
        $data = [];
        $data['title'] = 'Indah taman | tukang taman';
        $data['product_desc'] = $this->request->getVar('product_desc');

        if ($this->request->getMethod() == 'post') {
            // validation
            $rules = [
                'product_name' => 'required|min_length[3]',
                'product_price' => 'required|min_length[2]',
                'product_desc' => 'required|min_length[5]',
                'product_category' => 'required',
            ];

            $errors = [
                'product_name' => [
                    'required' => 'Kami butuh nama produk!',
                    'min_length' => 'judul produk terlalu pendek!'
                ], 'product_price' => [
                    'min_length' => 'Harga harus lebih dari 2 digit!'
                ], 'product_desc' => [
                    'required' => 'Kami butuh deskripsi produk',
                    'min_length' => 'Deskripsi terlalu pendek!'
                ], 'product_category' => [
                    'min_length' => 'Produk kamu belum di beri kategori!'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $ProductModel = new  ProductModel();

                $data_product = [
                    'product_name' => $this->request->getVar('product_name'),
                    'product_price' => $this->request->getVar('product_price'),
                    'product_desc' => $this->request->getVar('product_desc'),
                    'product_category' => $this->request->getVar('product_category'),
                    'link_tokopedia' => $this->request->getVar('link_tokopedia'),
                    'link_shopee' => $this->request->getVar('link_shopee'),
                    'link_lazada' => $this->request->getVar('link_lazada'),
                ];

                $ProductModel->insert($data_product);

                $session = session();
                // parameter pertama untuk menset daata item
                // lalu untuk menerima nya menggunakan session()->get('item yang kita buat');
                // saat kita panggil maka, value yang ada pada parameter kedua akan terpanggil; 
                $session->setFlashdata('success', 'Menambah produk');
                return redirect()->to(base_url() . '/admin-product');
            }
        }

        return view('admin/product/index', $data);
    }

    public function detail($product_id)
    {
        $data = [
            'title' => 'Indah Taman | tukang taman',
            'products' => $this->productmodel->getDataJoin($product_id)
        ];

        return view('admin/product/detail', $data);
    }

    public function update($product_id)
    {
        $data = [
            'title' => 'Update produk indah taman',
            'id' => $product_id,
            'product' => $this->productmodel->getDataById($product_id)
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'product_name' => 'required|min_length[3]',
                'product_price' => 'required|min_length[2]',
                'product_desc' => 'required|min_length[5]',
                'product_category' => 'required',
            ];
            $errors = [
                'product_name' => [
                    'required' => 'Kami butuh nama produk!',
                    'min_length' => 'judul produk terlalu pendek!'
                ], 'product_price' => [
                    'min_length' => 'Harga harus lebih dari 2 digit!'
                ], 'product_desc' => [
                    'required' => 'Kami butuh deskripsi produk',
                    'min_length' => 'Deskripsi terlalu pendek!'
                ], 'product_category' => [
                    'min_length' => 'Produk kamu belum di beri kategori!'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'product_name' => $this->request->getVar('product_name'),
                    'product_price' => $this->request->getVar('product_price'),
                    'product_desc' => $this->request->getVar('product_desc'),
                    'product_category' => $this->request->getVar('product_category'),
                    'link_tokopedia' => $this->request->getVar('link_tokopedia'),
                    'link_shopee' => $this->request->getVar('link_shopee'),
                    'link_lazada' => $this->request->getVar('link_lazada'),
                ];
                $this->productmodel->updateProduct($newData, $product_id);
                session()->setFlashdata('success', 'Mengubah produk');
                return redirect()->to('/admin-product');
            }
        }
        return view('admin/product/update', $data);
    }

    public function delete($product_id)
    {
        $this->productmodel->deleteProduct($product_id);
        session()->setFlashdata('success', 'Menghapus produk');
        return redirect()->to('/admin-product');
    }
}
