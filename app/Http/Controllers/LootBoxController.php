<?php

namespace App\Http\Controllers;

use App\LootBox;
use App\Product;
use App\Prize;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class LootBoxController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => ['required', 'image']

        ]);

        $imagePath = request('image')->store('/uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
        $image->save();

        $lootBox = new LootBox([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
            'image' => $imagePath

        ]);

        $lootBox->save();
        return redirect('/admin/boxes');
    }
    //returns the brought lootbox
    public function show($id)
    {

        $prizes = Prize::where('loot_box_id', '=', $id)->get();

        $prizesArr = $prizes->toArray();
        $box = $prizes[array_rand($prizesArr)];
        return redirect('/')->with(compact('box')); //
    }
    public function index()
    {

        $boxes = LootBox::all();
        $products = Product::all();
        return view('admin.boxes', compact('boxes', 'products'));
    }
}
