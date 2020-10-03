@extends('layouts.app')

@section('content')

    <div class="container-fluid boxview m-2">
        <img src="{{env('AWS_URL').'/'.$box->image}}" alt="" srcset="">
    <button id="open-btn" class="btn btn-outline-primary" >Open for ${{$box->price}}</button>
    </div>

<div class="card-list product-list">
@foreach ($box->prizes as $prize)
<div class="card" >
    <img src="{{env('AWS_URL').'/'.$prize->product->image}}" alt="" class="card-image-top">
    <div class="drop-rate">{{$prize->percentage}}%</div>
<p class="card-text">{{$prize->product->name}}</p>
</div>
@endforeach
</div>


@endsection
