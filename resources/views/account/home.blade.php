@extends('layouts.app')

@section('content')
<section class="box-list rounded">

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
