<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
            ])->orderBy('id', 'DESC')->paginate(10);

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