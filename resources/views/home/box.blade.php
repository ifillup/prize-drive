@extends('layouts.app')

@section('content')

    <div class="container-fluid boxview m-2">
        <img src="{{env('AWS_URL').'/'.$box->image}}" alt="" srcset="">
    <button id="open-btn" class="btn btn-outline-primary" >Open for ${{$box->price}}</button>
    </div>


    <button id="show-drops" class="btn">show drops %</button>
    <section class="product-list box-list">
        @foreach ($box->prizes as $prize)
        <article class="product" >
            <img src="{{env('AWS_URL').'/'.$prize->product->image}}" alt="" class="">
            <div class="drop-rate">{{$prize->percentage}}%</div>
            <p class="card-text">{{$prize->product->name}}</p>
        </article>
        @endforeach
        </section>


@endsection
