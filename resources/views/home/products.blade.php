
<div class="d-flex">
@foreach ($products as $product)
    <img src="/storage/{{ $product->image }}" alt="" class="col-2 rounded-circle">
@endforeach
</div>
    {{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
  </div> --}}

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
