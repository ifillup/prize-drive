@extends('layouts.app')

@section('content')
<main class="">


    @include('home.products')
    <div class="main-container">
    @include('home.feature')
    @include('home.boxes')
</div>
</main>
@endsection
