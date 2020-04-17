<?php

namespace Modules\Admin\Http\Controllers;

use App\Model\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{
   public function index() {
       $ratings = Rating::with('user:id,name', 'product:id,pro_name')->paginate(10);
       $viewData = [
            'ratings'    => $ratings
       ];
       return view('admin::rating.index', $viewData);
   }
}
