<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

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

        return redirect('home');
    }
}
