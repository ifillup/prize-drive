@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
    <img src="{{env('AWS_URL').'/'.$box->image}}" alt="" srcset="">
    <button id="open-btn" class="btn btn-outline-primary" >OPEN</button>
</div>
</div>
<div class="card-list">
@foreach ($box->prizes as $prize)
<div class="card">
    <img src="{{env('AWS_URL').'/'.$prize->product->image}}" alt="" srcset="">
</div>
@endforeach
</div>


@endsection
