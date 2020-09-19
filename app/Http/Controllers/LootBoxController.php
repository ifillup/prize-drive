<?php

namespace App\Http\Controllers;

use App\LootBox;
use App\Product;
use App\Prize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

        // $imagePath = request('image')->store('/uploads', 'public');

        //dd(public_path("storage/{$imagePath}"));
        $image = Image::make(request('image'))->fit(400, 400)->encode('jpg');
        //$image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400)->save();


        // $image = Image::make(request('image'))->fit(400, 400)->save(env('AWS_URL') . '/uploads/');
        $filePath = 'uploads/' . uniqid() . '.jpg';
        Storage::disk('s3')->put($filePath, $image);
        // Storage::delete($imagePath);



        $lootBox = new LootBox([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
            'image' => $filePath

        ]);

        $lootBox->save();
        return redirect('/admin/boxes');
    }
    //returns the brought lootbox
    public function show($id)
    {

        $prizes = Prize::where('loot_box_id', '=', $id)->get();

        $prizesArr = $prizes->toArray();
        $draw = array();
        foreach ($prizesArr as $prize) {

            $count = $prize['percentage'];
            while ($count > 0) {
                $draw[] = $prize;
                $count--;
            }
        }
        while (count($draw) < 100) {
            $draw[] = 'no prize';
        }

        $prize = $draw[array_rand($draw)];
        $product = $prize->product;
        dd($product);
        return redirect('/')->with(compact('product'));
    }
    public function index()
    {

        $boxes = LootBox::all();
        $products = Product::all();
        return view('admin.boxes', compact('boxes', 'products'));
    }
}
