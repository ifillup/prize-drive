@extends('layouts.app')

@section('content')
<h3>Account Information</h3>
<h4>Username: {{auth()->user()->name}}</h4>
<h4>Email: {{auth()->user()->email}}</h4>
<h4>Shipping Address: Add Shipping Address</h4>

<h3>Inventory</h3>
<section class="box-list inventory-list ">

@isset(auth()->user()->inventory)

@foreach (auth()->user()->inventory as $item)
<div class="inventory box">
<img src="{{env('AWS_URL').'/'. $item->product->image }}" alt="">
<form  action="{{ secure_url('/sell') }}" method="POST">
    @csrf
        <input type="hidden" name="value" value="{{$item->product->cost}}" >
        <input type="hidden" name="item" value="{{$item->id}}" >
        <button id='sell-btn' class="action-btn" type="submit" >Sell ${{$item->product->cost}}</button>
</form>
</div>
@endforeach
@endisset

</section>
@endsection
