@extends('layouts.app')

@section('content')
<main class="">


    @include('home.products')
    <div class="main-container">
    @include('home.feature')
    <div class="d-flex m-2">
        <a class='action-btn'>Hot</a>
        <a class='action-btn'>New</a>
        <a class='action-btn'>Electronics</a>
        <a class='action-btn'>Fashion</a>
    </div>
    @include('home.boxes')
</div>
</main>
@endsection
