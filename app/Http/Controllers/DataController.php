<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Traits\DataTrait;


class DataController extends Controller
{
    use DataTrait;

    public function ProductList(){
        $products = $this->getData(new Product());

        echo   "<pre>";
        print_r($products);
    }

    public function BlogList(){
        
    }
}
