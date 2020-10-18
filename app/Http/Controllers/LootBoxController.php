<?php

namespace App\Http\Controllers;

use App\LootBox;
use App\Product;
use App\Prize;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $image = Image::make(request('image'))->fit(400, 400)->encode('png');
        //$image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400)->save();


        // $image = Image::make(request('image'))->fit(400, 400)->save(env('AWS_URL') . '/uploads/');
        $filePath = 'uploads/' . uniqid() . '.png';
        Storage::disk('s3')->put($filePath, $image);
        // Storage::delete($imagePath);



        $lootBox = new LootBox([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
            'image' => $filePath,
            'published' => false

        ]);

        $lootBox->save();
        return redirect('/admin/boxes');
    }
    //returns the brought lootbox
    public function open($id)
    {
        $transaction = new Transaction([
            "user_id" => Auth::user()->id,
            "value" => LootBox::find($id)->price * -1
        ]);
        $transaction->save();
        $prizes = Prize::where('loot_box_id', '=', $id)->get();

        $draw = array();
        foreach ($prizes as $prize) {

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

        if ($prize == 'no prize') {
            $product = $prize;
        } else {
            $product = $prize->product;
        }

        $box = LootBox::find($id);
        return view('home.box', compact('product', 'box'));
    }
    public function index()
    {

        $boxes = LootBox::all();
        $products = Product::all();
        return view('admin.boxes', compact('boxes', 'products'));
    }
    // delete all prizes via lootbox relationship, lootbox, and image from s3
    public function destroy($id)
    {
        $box = LootBox::find($id);

        foreach ($box->prizes as $prize) {
            $prize->delete();
        }
        Storage::disk('s3')->delete($box->image);
        $box->delete();

        return redirect('/admin/boxes');
    }
    public function show($id)
    {
        $box = LootBox::find($id);
        return view('home.box', compact('box'));
    }
}
