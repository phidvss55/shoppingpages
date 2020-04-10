<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Product;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $productHot = Product::where([
            'pro_hot' => Product::HOT_ON,
            'pro_active' => Product::STATUS_PUBLIC
        ])->limit(5)->get();

        $articleNews = Article::orderBy('id', 'DESC')->limit(6)->get();
        
        $viewData = [
            'productHot'    => $productHot,
            'articleNews'   => $articleNews
        ];
        
        return view("home.index", $viewData);
    }        
}
