<?php

namespace App\Http\Controllers;

use App\LootBox;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class LootBoxController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => ['required', 'image']

        ]);

        $imagePath = request('image')->store('/uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
        $image->save();

        $lootBox = new LootBox([
            'name' => $data['name'],

            'description' => $data['description'],
            'image' => $imagePath

        ]);

        $lootBox->save();
        return redirect('/admin/boxes');
    }
    public function index()
    {

        $boxes = LootBox::all();
        return view('admin.boxes', compact('boxes'));
    }
}
