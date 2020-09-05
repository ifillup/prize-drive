<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
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


        $imagePath = request('image')->store('/uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
        $image->save();

        $product = new Product([
            'name' => $data['name'],
            'cost' => $data['cost'],
            'description' => $data['description'],
            'image' => $imagePath
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
