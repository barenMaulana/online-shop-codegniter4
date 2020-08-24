<?php

namespace App\Controllers;

use App\CodeIgniter;
use App\Models\GalleryModel;

class Gallery extends BaseController
{
    protected $gallerymodel;

    public function __construct()
    {
        $this->gallerymodel = new GalleryModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Gallery indah taman ',
            'products' => $this->gallerymodel->getProduct()
        ];

        if ($this->request->getVar()) {
            $rules = [
                'product_id' => 'required',
                'image_name' => 'uploaded[image_name]|max_size[image_name,1200]|ext_in[image_name,png,jpg,jpeg]|mime_in[image_name,image/png,image/jpg,image/jpeg]|is_image[image_name]',
            ];

            $errorMessages = [
                'image_name' => [
                    'max_size' => 'Ukuran foto terlalu besar!, seharusnya dibawah 1,2 mb',
                    'ext_in' => 'Foto tidak sesuai format yang sudah di tentukan!',
                    'is_image' => 'Pilih gambar, bukan yang lain!'
                ]
            ];

            if (!$this->validate($rules, $errorMessages)) {
                $data['validation'] = $this->validator;
            } else {
                $file = $this->request->getFile('image_name');
                $post = $this->request->getPost('product_id');
                $this->gallerymodel->store($file, $post);

                session()->setFlashdata('success', 'Menambahkan foto!');
                return redirect()->to('/admin-gallery');
            }
        }
        return view('admin/gallery/index', $data);
    }

    public function delete($gallery_id)
    {
        $this->gallerymodel->deleteGallery($gallery_id);
        session()->setFlashdata('success', 'Menghapus foto');
        return redirect()->to('/admin-gallery');
    }
}
