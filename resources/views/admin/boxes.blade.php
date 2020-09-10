@extends('admin.dashboard')

@section('main')
<div class="d-flex">
<form action="{{ url('/admin/boxes')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <h4>Create LootBox</h4>
    <div class="">
    <label for="name" >LootBox Name</label>
    <input type="text" name="name" />
</div>
<div class="">
    <label for="price">Price:</label>
      <input type='number' name='price' min='0' max='100'>
</div>
<div class="">
    <label for="description" >Description</label>
    <textarea name='description' col='30' ></textarea>
</div>
    <input type='file' name='image'>
    <input type="submit" value="Create" class="btn btn-primary" />

</form>
<form action="{{ url('/admin/add')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <label for="loot_box_id">Choose a Box:</label>
    <select name="loot_box_id" id="loot_box_id">
        @foreach ($boxes as $box)
        <option value="{{$box->id}}">{{ $box->name}}</option>
        @endforeach
      </select>
      <label for="product_id">Choose a Product:</label>
    <select name="product_id" id="product_id">
        @foreach ($products as $product)
        <option value="{{$product->id}}">{{ $product->name}}</option>
        @endforeach
      </select>
      <label for="product_id">Drop Percentage:</label>
      <input type='number' name='percentage' min='0' max='100'>

      <input type="submit" value="Add Item" class="btn btn-primary" />

</form>

</div>
<ol>


@foreach ($boxes as $box)
<h5>{{ $box->name}}</h5>
<h5>{{$box->cost()}}<h5>
<ul>

        @foreach($box->prizes as $prize)

        <li> {{ $prize->id}} Product Name:{{ $prize->product->name}} Drop Percentage:{{ $prize->percentage}}</li>


        @endforeach



</ul>
@endforeach


</ol>


@endsection
