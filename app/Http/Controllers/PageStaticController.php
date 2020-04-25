<?php

namespace App\Http\Controllers;

use App\Model\PageStatic;
use Illuminate\Http\Request;

class PageStaticController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function aboutUs() {
        $pages = PageStatic::where('ps_type', PageStatic::TYPE_ABOUT)->first();
        
        return view('page_static.about', compact('pages'));
    }
}