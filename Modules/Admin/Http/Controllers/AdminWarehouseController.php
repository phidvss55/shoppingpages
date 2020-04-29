<?php

namespace Modules\Admin\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminWarehouseController extends Controller
{
    private function getCategories() {
        return Category::all();
    }
    public function getWarehouseProduct(Request $request) {
        $products = Product::with('category:id,c_name');
        $column = 'id';
        if($request->type && $request->type == 'pay') {
            $column = 'pro_pay';
        } else {
            $products->where('pro_number', '<=', 5);
        }

        if( $request->name) $products->where('pro_name', 'like', '%' . $request->name . '%');
        if( $request->cate) $products->where('pro_category_id', $request->cate);

        $products = $products->orderByDesc($column)->paginate(10);
        $categories = $this->getCategories();

        $viewData = [
            'products'      => $products,
            'categories'    => $categories
        ];

        // dd($viewData);
        return view('admin::warehouse.index', $viewData);
    }    
}
