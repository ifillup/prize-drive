@extends('layouts.app')

@section('content')
<div class="container">
<div class="card  pt-8">
    <img src="{{env('AWS_URL').'/'.$box->image}}" alt="" srcset="">
</div>
</div>
<div class="card-list">
@foreach ($box->prizes as $prize)
    <img src="{{env('AWS_URL').'/'.$prize->product->image}}" alt="" srcset="">
@endforeach
</div>


@endsection
