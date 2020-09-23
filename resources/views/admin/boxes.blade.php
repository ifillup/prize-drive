@extends('admin.dashboard')

@section('main')
<div class="d-flex justify-content-start">
<form class='bg-light p-2 rounded ml-2' action="{{ secure_url('/admin/boxes')}}" method="POST" enctype="multipart/form-data" >
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
<form class='bg-light m-5 p-2 rounded align-self-start' action="{{ secure_url('/admin/add')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <h4>Add a Prize</h4>
    <label for="loot_box_id">Choose a Box</label>
    <select class="custom-select" name="loot_box_id" id="loot_box_id">
        @foreach ($boxes as $box)
        <option value="{{$box->id}}">{{ $box->name}}</option>
        @endforeach
      </select>
      <label for="product_id">Choose a Product</label>
    <select class="custom-select" name="product_id" id="product_id">
        @foreach ($products as $product)
        <option value="{{$product->id}}">{{ $product->name}}</option>
        @endforeach
      </select>
      <div class="form-group  d-flex justify-content-between mt-2">
      <label for="product_id">Drop Percentage</label>
      <input type='number' name='percentage' min='0' max='100'>
    </div>
      <input type="submit" value="Add Item" class="btn btn-primary" />


</form>

</div>



@foreach ($boxes as $box)
<div class="bg-light m-2 p-2 rounded">
<h5>{{ $box->name}} | Price: ${{$box->price}} | Cost: ${{$box->cost()}}</h5>

    <div class="d-flex">
        <div >
            <img class="float-left h-50"  src="{{env('AWS_URL') .'/' .$box->image}}" >
        </div>
        <div class="">
            {{-- <ul>

                    @foreach($box->prizes as $prize)

                    <li> {{ $prize->id}} Product Name:{{ $prize->product->name}} Drop Percentage:{{ $prize->percentage}}</li>


                    @endforeach



            </ul> --}}
            <table class="table bg-light table-striped rounded m-2 shadow ">
                <thead>
                  <tr>

                    <th scope="col">Product Name</th>
                    <th scope="col">Drop %</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Cost per box</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($box->prizes as $prize)
                    <tr>

                    <td>{{ $prize->product->name}}</td>
                    <td>{{ $prize->percentage}}</td>
                    <td>{{ $prize->product->cost}}</td>
                    <td>{{ $prize->product->cost * ($prize->percentage /100)}}</td>

                  </tr>
                  @endforeach
                </tbody>
</div>

</div>
</div>
@endforeach





@endsection
