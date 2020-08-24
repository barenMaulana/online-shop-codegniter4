<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $allowedFields = ['product_id', 'image_name', 'updated_at'];
    protected $db;
    protected $builder;


    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getProduct()
    {
        $getProduct = $this->db->table('product');
        $query = $getProduct->get();

        return $query->getResultArray();
    }

    public function getData($keyword = null)
    {
        if (isset($keyword))  $this->builder->like('product_name', $keyword);
        $this->builder->select('gallery.*, gallery.id as id_gallery, product.id as id_product, product_name');
        $this->builder->join('product', 'product.id = gallery.product_id');
        $query = $this->builder->get();

        return $query->getResultArray();
    }

    public function store($data, $post)
    {
        $newName = $data->getRandomName();
        $data->move(ROOTPATH . 'public/upload', $newName);

        $newData = [
            'image_name' =>  $newName,
            'product_id'  => $post
        ];

        $this->builder->insert($newData);
    }

    public function deleteGallery($id)
    {
        $this->builder->where('id', $id);
        $this->builder->delete();
    }
}
