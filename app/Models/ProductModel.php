<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $allowedFields = ['product_name', 'product_price', 'product_desc', 'product_category', 'link_tokopedia', 'link_lazada', 'link_shopee'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table($this->table);
    }

    protected function filterInput(array $data)
    {
        if (isset($data['data'])) {
            $data['data']['product_name']   = htmlspecialchars($data['data']['product_name']);
            $data['data']['product_price']  = htmlspecialchars($data['data']['product_price']);
            $data['data']['product_desc']   = htmlspecialchars($data['data']['product_desc']);
            $data['data']['link_tokopedia'] = htmlspecialchars($data['data']['link_tokopedia']);
            $data['data']['link_lazada']    = htmlspecialchars($data['data']['link_lazada']);
            $data['data']['link_shopee']    = htmlspecialchars($data['data']['link_shopee']);
            return $data;
        }
        return $data;
    }

    protected function beforeInsert(array $data)
    {
        return $data = $this->filterInput($data);
    }

    protected function beforeUpdate(array $data)
    {
        return $data = $this->filterInput($data);
    }

    public function getDataCategory($category)
    {
        $query = $this->builder->getWhere(['product_category' => $category]);
        return $query->getResult();
    }

    public function searchProduct($keyword)
    {
        $this->builder->like('product_name', $keyword);
        $query = $this->builder->get();
        return $query->getResult();
    }

    public function searchWithJoin($keyword)
    {
        $this->builder->like('product_name', $keyword, 'both');
        $this->builder->select('product.*, gallery.id as id_gallery, product.id as id_product, image_name, product_name');
        $this->builder->join('gallery', 'gallery.product_id = product.id');
        $query = $this->builder->get();

        return $query->getResultArray();
    }

    public function getData()
    {
        $query = $this->builder->get();
        return $query->getResult();
    }

    public function getDataById($id)
    {
        $query = $this->builder->get($id);
        return $query->getRowArray();
    }

    public function getDataJoin($id = null)
    {
        $this->builder->select('product.*, gallery.id as id_gallery, product.id as id_product, image_name');
        if (isset($id))  $this->builder->where('product.id', $id);
        $this->builder->join('gallery', 'gallery.product_id = product.id');
        $query = $this->builder->get();

        return $query->getResultArray();
    }

    public function updateProduct($data, $product_id)
    {
        $newData = [
            'product_name' => $data['product_name'],
            'product_price' => $data['product_price'],
            'product_desc' => $data['product_desc'],
            'product_category' => $data['product_category'],
            'link_tokopedia' => $data['link_tokopedia'],
            'link_shopee' => $data['link_shopee'],
            'link_lazada' => $data['link_lazada'],
        ];
        $this->builder->where('id', $product_id);
        $this->builder->update($newData);
    }

    public function deleteProduct($id)
    {
        $this->builder->where('id', $id);
        $this->builder->delete();
    }
}
