@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            {{-- lootbox card --}}
            {{-- @include('home.products') --}}




        {{-- <div class="container d-flex">
            <div class="card" style="width: 18rem;">
                <img src="{{url('/image/box1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">box title</h5>
                  <p class="card-text">description...</p>
                  <a href="#" class="btn btn-primary">BUY</a>
                  <span>$00.00</span>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{url('/image/box3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">box title</h5>
                  <p class="card-text">description...</p>
                  <a href="#" class="btn btn-primary">BUY</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{url('/image/box2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">box title</h5>
                  <p class="card-text">description...</p>
                  <a href="#" class="btn btn-primary">BUY</a>
                </div>
            </div>
        </div> --}}
        </div>
    </div>
    @include('home.products')

    <div class="feature">
        @if (session('product'))
            @include('home.open')
        @else
            @include('home.feature')
        @endif
    </div>
    @include('home.boxes')
</div>

@endsection
