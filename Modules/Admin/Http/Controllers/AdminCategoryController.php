<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestCategory;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'c_name', 'c_title_seo', 'c_active')->get();
        $viewData = [
            'categories' => $categories
        ];
        return view('admin::category.index', $viewData);
    }

    public function create() {
        return view('admin::category.create');
    }

    public function store(RequestCategory $requestCategory) {
        $this->insertOrUpdate($requestCategory);
        return redirect()->back();
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin::category.update', compact('category'));
    }

    public function update($id, RequestCategory $requestCategory) {
        $this->insertOrUpdate($requestCategory, $id);
        return redirect()->back();
    }

    public function action($action, $id) {
        if($action) {
            $category = Category::findOrFail($id);
            switch($action) {
                case 'delete':
                    $category->delete();
                    break;
                default:
                    break;
            }
        }
    }

    public function insertOrUpdate($requestCategory, $id='') {
        $code = 1;
        try {
            $category = new Category();
            if($id) {
                $category = Category::findOrFail($id);
            }
            $category->c_name           = $requestCategory->name;
            $category->c_slug           = Str::slug($requestCategory->name);
            $category->c_icon           = $requestCategory->icon;
            $category->c_title_seo      = $requestCategory->c_title_seo ? $requestCategory->c_title_seo : $requestCategory->name;
            $category->c_description_seo = $requestCategory->c_description_seo ? $requestCategory->c_description_seo : $requestCategory->name;
            $category->save();
        } catch(\Exception $e) {
            $code = 0;
            Log::error("[Error inter or update Categories ]".$e->getMessage());        
        }  
        return $code;
    }
}
