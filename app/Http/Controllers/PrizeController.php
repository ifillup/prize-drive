<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prize;

class PrizeController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'percentage' => 'required',

        ]);
        $prize = new Prize([
            'loot_box_id' => request('loot_box_id'),
            'product_id' => request('product_id'),
            'percentage' => $data['percentage'],
        ]);
        $prize->save();
        return redirect('/admin/boxes');
    }
}
