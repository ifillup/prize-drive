@extends('layouts.app')

@section('content')
<div class="main-container">
    <div class="boxview">
    @if (isset($product))
     @include('home.open')
    @elseif (Auth::check())

        <img src="{{env('AWS_URL').'/'.$box->image}}" alt="" srcset="">
        <a href="{{url('open/'.$box->id)}}" id="open-btn" class="btn btn-outline-primary open-btn"  >Buy for ${{$box->price}}</a>
    @else
    <img src="{{env('AWS_URL').'/'.$box->image}}" alt="" srcset="">
    <div href="{{ route('login') }}" id="open-btn" class="btn btn-outline-primary open-btn"  >Login to buy ${{$box->price}}</div>
    @endif
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

    </div>
@endsection
