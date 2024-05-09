<?php

namespace App\Classes;

class Category
{
    public $category=[];
    public function __construct()
    {
        $this->category = [
            0=>[
                'category_id'=>1,
                'categoryName'=>'Mouse',
            ],
            1=>[
                'category_id'=>2,
                'categoryName'=>'Monitor',
            ],
            2=>[
                'category_id'=>3,
                'categoryName'=>'Keyboard',
            ],
            3=>[
                'category_id'=>4,
                'categoryName'=>'Laptop',
            ],
        ];
    }
    public function getCategoryAll(){
        return $this->category;
    }

}