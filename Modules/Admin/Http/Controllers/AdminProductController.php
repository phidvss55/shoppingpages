<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{
    public function index() {
        $products = Product::paginate(10);
        $viewData = [
            'products' => $products,
        ];

        // dd($viewData);
        return view('admin::product.index', $viewData);
    }

    public function create() {
        $categories = $this->getCategories();
        return view('admin::product.create', compact('categories'));
    }

    public function store(RequestProduct $requestProduct) {
        $this->insertOrUpdate($requestProduct);
        return redirect()->back();
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = $this->getCategories();
        return view('admin::product.update', compact('product', 'categories'));
    }

    public function update(RequestProduct $requestProduct, $id) {
        $this->insertOrUpdate($requestProduct, $id);
        return redirect()->back();
    }

    public function getCategories() {
        return Category::all();
    }

    public function insertOrUpdate(RequestProduct $requestProduct, $id='') {
        $product = new Product();
        if($id) { $product = Product::find($id); }
        $product->pro_name = $requestProduct->pro_name;
        $product->pro_slug = Str::slug($requestProduct->pro_name);
        $product->pro_category_id = $requestProduct->pro_category_id;
        $product->pro_price = $requestProduct->pro_price;
        $product->pro_sale = $requestProduct->pro_sale;
        $product->pro_description = $requestProduct->pro_description;
        $product->pro_content = $requestProduct->pro_content;
        $product->pro_title_seo = $requestProduct->pro_title_seo ? $requestProduct->pro_title_seo : $requestProduct->pro_name ;
        $product->pro_description_seo = $requestProduct->pro_description_seo ? $requestProduct->pro_description_seo : $requestProduct->pro_name;
        $product->save();
    }
}
