@extends('admin.dashboard')

@section('main')
<form action="{{ url('/admin/boxes')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <h4>Create LootBox</h4>
    <div class="">
    <label for="name" >LootBox Name</label>
    <input type="text" name="name" />
</div>
<div class="">
    <label for="description" >Description</label>
    <textarea name='description' col='30' ></textarea>
</div>
    <input type='file' name='image'>
    <input type="submit" value="Add Product" class="btn btn-primary" />

</form>
<ol>
@foreach ($boxes as $box)
    <li>{{ $box->name}}</li>
@endforeach
</ol>


@endsection
