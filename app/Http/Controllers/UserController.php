<?php

namespace App\Http\Controllers;

use App\Model\Transaction;
use App\User;
use Illuminate\Http\Request;

class UserController extends FrontendController
{
    // show dashboard user
    public function index() {
        
        $transactions           = Transaction::where('tr_user_id', get_data_user('web'));
        $listTransactions       = $transactions; //make totaltransactionsdone not depend on transactions

        $transactions           = $transactions->addSelect('id', 'tr_total', 'tr_address', 'tr_phone','tr_status','created_at')->paginate(10);

        //total transaction of user dashbaord
        $totalTransactions      = $listTransactions->select('id')->count();
        $totalTransactionsDone  = $listTransactions->where('tr_status', Transaction::STATUS_DONE)->select('id')->count();

        $viewData = [
            'totalTransactions'     => $totalTransactions,
            'totalTransactionsDone' => $totalTransactionsDone,
            'transactions'          => $transactions,
        ];
        return view('user.index', $viewData);
    }   

    public function updateInfo() {
        $user = User::find(get_data_user('web'));
        return view('user.info', compact('user'));
    }

    public function saveUpdateInfo(Request $request) {
        $user = User::where('id', get_data_user('web'))->update($request->except('_token'));
        return redirect()->back()->with('success', ' Cập nhật thông tin thành công ');
    }

    public function updatePassword() {
        return view('user.password');
    }

    public function saveUpdatePassword(Request $request) {

    }
}
