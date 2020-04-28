<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use App\Model\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function productDetail(Request $request) {
        // $product = Product::where('id', )
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);

        if($id = array_pop($url)) {
            $productDetail = Product::where('pro_active', Product::STATUS_PUBLIC)->find($id);
            $cateProduct = Category::find($productDetail->pro_category_id);
            $ratings = Rating::with('user:id,name')->where('ra_product_id', $id)->orderBy('id', 'DESC')->paginate(10);

            //gom nhom lai: co bao nhieu luot danh gia 1 sao, 2 sao, 3 sao ...
            $ratingsDashboard = Rating::groupBy('ra_number')->where('ra_product_id', $id)
            ->select(DB::raw('count(ra_number) as total'), DB::raw('sum(ra_number) as sum'))->addSelect('ra_number') //san pham nay co bao nhieu luot danh gia
            ->get()->toArray(); //addSelect() ->

            $arrayRatings = [];
            if(!empty($ratingsDashboard)) {
                for($i = 1; $i <= 5; $i++) {
                    $arrayRatings[$i] = [
                        'total' => 0,
                        'sum'   => 0,
                        'ra_number' => 0,
                    ];
                    foreach($ratingsDashboard as $item) {
                        if($item['ra_number'] == $i) {
                            $arrayRatings[$i] = $item;
                            continue;
                        }
                    }
                }
            }

            $viewData = [
                'productDetail' => $productDetail,
                'cateProduct'   => $cateProduct,
                'ratings'       => $ratings,
                'arrayRatings'  => $arrayRatings,
            ];
        }
        
        return view('product.detail', $viewData);
    }
}
