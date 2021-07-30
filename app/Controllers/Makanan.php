<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Makanan extends BaseController



{
    protected $ReviewModel;
    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
    }


    public function index()
    {
        //$review = $this->reviewModel->findAll();

        $data = [
            'title' => 'Review | Seafood',
            'review' => $this->ReviewModel->getReview()
        ];

        return view('makanan/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Review',
            'review' => $this->ReviewModel->getReview($slug)
        ];




        return view('makanan/detail', $data);
    }



    public function create()
    {
        $data = [
            'title' => 'Add Review | Seafood'
        ];
        return view('makanan/create', $data);
    }


    public function save()
    {



        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->ReviewModel->save([
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'image' => $this->request->getVar('image'),
            'coment' => $this->request->getVar('coment')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/makanan');
    }
}
