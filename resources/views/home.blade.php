@extends('layouts.app')

@section('content')
<main class="">
<div class="container">

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
</main>
@endsection
