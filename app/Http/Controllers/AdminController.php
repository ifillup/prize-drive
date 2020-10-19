<?php

namespace App\Http\Controllers;

use App\LootBox;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }
    public function creditDebitUser()
    {
        $user_id = request('user_id');
        $value = request('value');
        $transaction = new Transaction([
            "user_id" => $user_id,
            "value" => $value
        ]);
        $transaction->save();

        return redirect('admin');
    }

    public function toggleAdmin()
    {
        $user = User::find(request('user_id'));

        $user->update(['admin' => !$user->admin]);
        return redirect('admin');
    }
    public function publish($id)
    {
        LootBox::find($id)->update(['published' => true]);
        return redirect('/admin/boxes');
    }
}
