<?php

namespace App\Http\Controllers;

use App\Models\MoneySource;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $sources = MoneySource::all();
        return view('account', compact('sources'));
    }

    public function storeSource(Request $request)
    {
        $create = MoneySource::create([
            'name' => $request->input('name'),
            'balance' => $request->input('balance', 0),
        ]);
    }
    public function updateBalance(Request $request, $id)
    {
        $moneySource = MoneySource::findOrFail($id);
        $moneySource->balance = $request->input('balance');
        $moneySource->save();
        return redirect()->back();
    }
}
