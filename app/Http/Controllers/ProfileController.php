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
        if ($create) {
            return redirect()->back()->with('success', 'Money source created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create money source.');
        }
    }
    public function updateBalance(Request $request, $id)
    {
        $moneySource = MoneySource::findOrFail($id);
        $moneySource->balance = $request->input('balance');
        $moneySource->save();
        return redirect()->back();
    }
}
