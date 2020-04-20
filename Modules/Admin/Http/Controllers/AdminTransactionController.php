<?php

namespace Modules\Admin\Http\Controllers;

use App\Model\Order;
use App\Model\Product;
use App\Model\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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
        if($action) {
            $transaction = Transaction::find($id);
            // dd($transaction) ;
            switch($action) {
                case 'resolve':
                    $orders = Order::where('or_transaction_id', $id)->get();
                    if($orders) {
                        foreach($orders as $order) {
                            $product = Product::find($order->or_product_id);
                            $product->pro_number = $product->pro_number - $product->or_qty;
                            $product->pro_pay++;
                            $product->save();
                        }
                    }
                    //Update user
                    DB::table('users')->where('id', $transaction->tr_user_id)->increment('total_pay');
                    $transaction->tr_status = Transaction::STATUS_DONE;
                    break;
                case 'delete':
                    $transaction->delete();
                    break;
                default:
                    break;
            }
            $transaction->save();
        }
        return redirect()->back()->with('success', 'Xử lý đơn hàng thành công.');
    }
}
