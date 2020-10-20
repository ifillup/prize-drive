@extends('layouts.app')

@section('content')

@foreach (auth()->user()->inventory as $item)

<img src="{{env('AWS_URL').'/'. $item->product->image }}" alt="">
<form  action="{{ secure_url('/sell') }}" method="POST">
    @csrf
        <input type="hidden" name="value" value="{{$item->product->cost}}" >
        <input type="hidden" name="item" value="{{$item->id}}" >
        <button id='sell-btn' class="btn btn-primary btn-sm" type="submit" >Sell for ${{$item->product->cost}}</button>
</form>
@endforeach
@endsection
