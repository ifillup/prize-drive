<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InventoryController extends Controller
{
    public function create()
    {
        $user_id = auth()->user()->id;
        $value = request('value');
        $transaction = new Transaction([
            "user_id" => $user_id,
            "value" => $value
        ]);
        $transaction->save();

        Inventory::destroy(request('item'));
        return view('account.home');
    }

    public function show()
    {

        return view('account.home');
    }
}
