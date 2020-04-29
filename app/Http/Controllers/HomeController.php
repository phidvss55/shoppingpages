<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use App\Model\Order;
use App\Model\Product;
use App\Model\Transaction;
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

        //check user login?
        $productSuggests = array();

        if(get_data_user('web')) {
            $transactions = Transaction::where([
                'tr_user_id' => get_data_user('web'),
                'tr_status'  => Transaction::STATUS_DONE
            ])->pluck('id');
            if( !empty($transactions)) {
                $listId = Order::WhereIn('or_transaction_id', $transactions)->distinct()->pluck('or_product_id');
                if( !empty($listId)) {
                    $listIdCategory = Product::whereIn('id', $listId)->distinct()->pluck('pro_category_id');                    
                    if( !empty($listIdCategory)) {
                        //get product from category
                        $productSuggests = Product::whereIn('pro_category_id', $listIdCategory)->limit(4)->get();
                    }
                }
            }
        }
        //if signined
        
        $viewData = [
            'productHot'    => $productHot,
            'articleNews'   => $articleNews,
            'categoriesHome'    => $categoriesHome,
            'productSuggests'   => $productSuggests,
        ];
        
        return view("home.index", $viewData);
    }

    public function renderProductView(Request $request) {
        if($request->ajax()) {
            $listId = $request->id;
            $products = Product::whereIn('id', $listId)->limit(4)->get();

            $html = view('components.product_view', compact('products'))->render();

            return response()->json(['data' => $html ]);
        }
    }
}
