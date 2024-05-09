<?php

namespace App\Classes;

class Product
{
    public $products=[];

    public function __construct()
    {
        $this->products=[
            0=>[
              'id'=>1,
               'name'           =>'CRT Monitor',
               'description'    =>'This is old model monitor',
               'image'          =>'assets/images/1.jpeg',
               'category_id'    =>1
            ],
            1=>[
              'id'=>2,
               'name'           =>'LCD Monitor',
               'description'    =>'This is also old model monitor',
               'image'          =>'assets/images/2.jpeg',
               'category_id'    =>1
            ],
            2=>[
              'id'=>3,
               'name'           =>'LED Monitor',
               'description'    =>'This is new model monitor',
               'image'          =>'assets/images/3.jpeg',
               'category_id'    =>1
            ],
            3=>[
              'id'=>4,
               'name'           =>'USB Mouse',
               'description'    =>'This is a usb cable mouse.',
               'image'          =>'assets/images/4.jpeg',
               'category_id'    =>2
            ],
            4=>[
              'id'=>5,
               'name'           =>'Wireless Mouse',
               'description'    =>'This is old model monitor',
               'image'          =>'assets/images/2.jpeg',
               'category_id'    =>2
            ],
        ];
    }

    public function getProductAll(){
        return $this->products;
    }
}