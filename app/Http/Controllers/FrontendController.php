<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        View::share('categories', $categories);
    }

    //IMPORTANT NOTE: THIS FUNCTION NOT WORK -> SHARE VIEW IN AppServiceProvider in Boot() function
}
