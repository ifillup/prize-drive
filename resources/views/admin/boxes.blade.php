@extends('admin.dashboard')

@section('main')
<div class="d-flex justify-content-between">
<form class='bg-light' action="{{ secure_url('/admin/boxes')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <h4>Create LootBox</h4>
    <div class="form-group">
    <label for="name">LootBox Name</label>
    <input class="form-control" type="text" name="name" />
    </div>
<div class="form-group">
    <label for="price">Price:</label>
      <input class="form-control" type='number' name='price' min='0' max='100'>
</div>
<div class="form-group">
    <label for="description" >Description</label>
    <textarea class="form-control" name='description' col='30' ></textarea>
</div>
<div class="form-group d-flex">
    <input type='file' class="form-control-file" name='image'>
    <input type="submit" value="Create" class="btn btn-primary" />
</div>
</form>
<form class='bg-light' action="{{ secure_url('/admin/add')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <h4>Add a Prize</h4>
    <label for="loot_box_id">Choose a Box:</label>
    <select class="custom-select" name="loot_box_id" id="loot_box_id">
        @foreach ($boxes as $box)
        <option value="{{$box->id}}">{{ $box->name}}</option>
        @endforeach
      </select>
      <label for="product_id">Choose a Product:</label>
    <select class="custom-select" name="product_id" id="product_id">
        @foreach ($products as $product)
        <option value="{{$product->id}}">{{ $product->name}}</option>
        @endforeach
      </select>
      <div class="form-group  d-flex justify-content-between mt-2">
      <label for="product_id">Drop Percentage:</label>
      <input type='number' name='percentage' min='0' max='100'>
    </div>
      <input type="submit" value="Add Item" class="btn btn-primary" />


</form>

</div>
<ol>


@foreach ($boxes as $box)
<h5>{{ $box->name}}</h5>
<h5>Price: ${{$box->price}}<h5>
<h5>Cost: ${{$box->cost()}}<h5>
    <div class="d-flex">
        <div >
            <img class="col-10"  src="{{env('AWS_URL') .'/' .$box->image}}" >
        </div>
        <div class="">
            <ul>

                    @foreach($box->prizes as $prize)

                    <li> {{ $prize->id}} Product Name:{{ $prize->product->name}} Drop Percentage:{{ $prize->percentage}}</li>


                    @endforeach



            </ul>
</div>

</div>
@endforeach


</ol>


@endsection
