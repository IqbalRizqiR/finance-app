<?php

namespace App\Http\Controllers;

use App\Models\TransactionLog;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function index(Request $request)
    {
        $transactionLogs = TransactionLog::all();
        $totalIncrease = TransactionLog::where('transaction_type', 'income')->sum('amount');
        $totalDecrease = TransactionLog::where('transaction_type', 'expense')->sum('amount');
        $total = $totalIncrease - $totalDecrease;
        $target = $request->input('target');
        return view('index', compact('transactionLogs', 'total'));
    }

    public function create (Request $request){
        $create = TransactionLog::create($request->all());
        if ($create) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }


    }



}
