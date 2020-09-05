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
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                  <div class="carousel-item d-flex">
                    <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="First slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                </div>
                  <div class="carousel-item d-flex">
                    <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                    <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item d-flex">
                    <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                    <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item d-flex active">
                        <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="First slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-11-pro-gold-select-2019.png')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item d-flex">
                        <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                        <img class="d-block w-25" src="{{url('/image/iphone11-red-select-2019.png')}}" alt="Second slide">
                      </div>
                      <div class="carousel-item d-flex">
                        <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                        <img class="d-block w-25" src="{{url('/image/iphone-xr-blue-select-201809.png')}}" alt="Third slide">
                      </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div> --}}


        <div class="container d-flex">
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
        </div>
        </div>
    </div>
</div>

@endsection
