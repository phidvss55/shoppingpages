<?php

namespace Modules\Admin\Http\Controllers;

use App\Model\Order;
use App\Model\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::with('user:id,name')->paginate(10);
        //Can use left join table
        $viewData= [
            'transactions'      => $transactions,
        ];
        return view('admin::transaction.index', $viewData);
    }

    public function viewOrder(Request $request, $id) {
        if($request->ajax()) {
            $orders = Order::with('product')->where('or_transaction_id', $id)->get();

            //render return html code
            $html = view('admin::components.order', compact('orders'))->render();
            return \response()->json($html);
        }
    }

    public function action($action, $id) {

    }
}
