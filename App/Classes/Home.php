<?php


namespace App\Classes;
use App\Classes\Category;
use App\Classes\Product;
class Home
{
    public $category, $categories;
    public $product, $products;
    public function index(){
        // for product
        $product = New Product();
        $this->products = $product->getProductAll();


        //for category
        //$category = new Category();
        //$this->categories = $category->getCategoryAll();
        //return view('Category',['categories'=>$this->categories]);
        return view('Product',['products'=>$this->products]);
    }
}