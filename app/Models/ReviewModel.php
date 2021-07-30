<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{

    protected $table      = 'review';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'slug', 'image', 'coment'];



    public function getReview($slug = false)
    {

        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
