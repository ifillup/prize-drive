@extends('admin.dashboard')

@section('main')
<div class="container">
    <form action="{{ url('/admin/products') }}" method="POST" enctype="multipart/form-data">
        @csrf


        <h4>Add New Product</h4>
        <div class="">
            <label for="name" >Product Name</label>


                <input id="name"
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}"
                autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="cost" >Cost</label>


                <input id="cost"
                type="number"
                class="form-control"
                name="cost" value="{{ old('cost') }}"
                autocomplete="cost" autofocus>
                <label for="image">Product Image</label>
                   <input class="form-control-file" type="file" name="image" id="image">

                   @error('image')

                               <strong>{{ $message }}</strong>

                       @enderror

        </div>
        <div class="">
            <label for="description">Description</label>
            <textarea name='description' class="form-control" id="description" rows="5"></textarea>
        </div>



            {{-- <div class="">
            <input type="submit" vale="Add Product" class="btn btn-primary" />
            </div> --}}
        </div>
        <input type="submit" value="Add Product" class="btn btn-primary" />
    </form>
<h2>PRODUCTS</h2>
<table class="table">
    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Cost</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>

        <td>{{$product->name}}</td>
        <td>{{$product->cost}}</td>
        <td>{{$product->description}}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
