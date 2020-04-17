<?php

namespace Modules\Admin\Http\Controllers;

use App\Model\Contact;
use App\Model\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index() {
        $ratings = Rating::with('user:id,name', 'product:id,pro_name')->limit(10)->get();
        $contacts = Contact::limit(10)->get();

        $viewData = [
            'ratings'   => $ratings,
            'contacts'  => $contacts
        ];
        return view('admin::index', $viewData);
    }
}
