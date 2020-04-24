<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getListProduct(Request $request) {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);

        if($id = array_pop($url)) {
            $products = Product::where([
                'pro_category_id'   => $id,
                'pro_active'        => Product::STATUS_PUBLIC
            ]);

            if($request->price) {
                $price = $request->price;
                switch($price) {
                    case '1':
                        $products->where('pro_price', '<', 1000000);
                        break;
                    case '2';
                        $products->whereBetween('pro_price', [1000000,3000000]);
                        break;
                    case '3';
                        $products->whereBetween('pro_price', [3000000,5000000]);
                        break;
                    case '4';
                        $products->whereBetween('pro_price', [5000000,7000000]);
                        break;
                    case '5';
                        $products->whereBetween('pro_price', [7000000,10000000]);
                        break;
                    case '6';
                        $products->where('pro_price', '>', 10000000);
                        break;
                }
            }

            if($request->orderby) {
                $orderBy = $request->orderby;
                switch($orderBy) {
                    case 'desc':
                        $products->orderBy('id', 'DESC');
                        break;
                    case 'asc':
                        $products->orderBy('id', 'asc');
                        break;
                    case 'price_desc':
                        $products->orderBy('pro_price', 'DESC');
                        break;
                    case 'price_asc':
                        $products->orderBy('pro_price', 'DESC');
                        break;
                    case 'default':
                        $products->orderBy('id', 'DESC');
                        break;
                }
            }

            $products = $products->paginate(3);

            $cateProduct = Category::find($id);

            $viewData = [
                'products'      => $products,
                'cateProduct'   => $cateProduct
            ];
            return view('product.index', $viewData);
        }
        return redirect('/');
    }
}