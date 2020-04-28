<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
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

        $categoriesHome = Category::with('products')->where('c_home', Category::HOME)->limit(3)->get(); //get 3 category active
        
        $viewData = [
            'productHot'    => $productHot,
            'articleNews'   => $articleNews,
            'categoriesHome'    => $categoriesHome,
        ];
        
        return view("home.index", $viewData);
    }

    public function renderProductView(Request $request) {
        if($request->ajax()) {
            $listId = $request->id;
            $products = Product::whereIn('id', $listId)->get();

            $html = view('components.product_view', compact('products'))->render();

            return response()->json(['data' => $html ]);
        }
    }
}
