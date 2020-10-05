@extends('layouts.app')

@section('content')
<main class="">


    @include('home.products')
    <div class="container">
    <div class="feature">
        @if (session('product'))
            @include('home.open')
        @else
            @include('home.feature')
        @endif
    </div>
    @include('home.boxes')
</div>
</main>
@endsection
