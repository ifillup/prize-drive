<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{

    public function store()
    {

        $data = request()->validate([
            'name' => 'required',
            'cost' => 'required',
            'description' => 'required',
            'image' => ['required', 'image']
        ]);

        $image = Image::make(request('image'))->fit(400, 400)->encode('jpg');

        $filePath = 'uploads/' . uniqid('prod') . '.jpg';
        Storage::disk('s3')->put($filePath, $image);


        $product = new Product([
            'name' => $data['name'],
            'cost' => $data['cost'],
            'description' => $data['description'],
            'image' => $filePath
        ]);

        $product->save();




        return redirect('/admin/products');
    }
    public function index()
    {

        $products = Product::all();
        return view('admin.products', compact('products'));
    }
}
