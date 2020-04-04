<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{
    public function index() {
        return view('admin::product.index');
    }

    public function create() {
        return view('admin::product.create');
    }
}
