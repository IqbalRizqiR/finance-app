<?php

namespace App\Http\Controllers;

use App\Models\MoneySource;
use App\Models\TransactionLog;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function index(Request $request)
    {
        $transactionLogs = TransactionLog::all();
        $incomeTotal = TransactionLog::where('transaction_type', 'income')->sum('amount');
        $expenseTotal = TransactionLog::where('transaction_type', 'expense')->sum('amount');
        $total = MoneySource::sum('balance');
        $sources = MoneySource::all();
        $target = $request->input('target');
        return view('index', compact('transactionLogs', 'total', 'sources', 'incomeTotal', 'expenseTotal' ));
    }

    public function create (Request $request){
        $create = TransactionLog::create($request->all());
        if ($create) {
            $source = MoneySource::where('id', $request->input('source_id'))->first();
            $update = TransactionLog::where('id', $create->id)->update([
                'source' => $source->name,
            ]);
            if ($request->input('transaction_type') == 'income') {
                $source->balance += $request->input('amount');
            } elseif ($request->input('transaction_type') == 'expense') {
                $source->balance -= $request->input('amount');
            }
            $source->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }


    }



}
