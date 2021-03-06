@extends('admin.dashboard')

@section('main')
<div class="container">
    <form class='bg-light p-2 rounded shadow ' action="{{ secure_url('/admin/products') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h4>Add New Product</h4>

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


        <div class="">
            <label for="description">Description</label>
            <textarea name='description' class="form-control" id="description" rows="5"></textarea>
        </div>
    <input type="submit" value="Add Product" class="btn btn-primary mt-1" />
    </form>
     <table class="table bg-light table-striped mt-1 rounded shadow ">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
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
</div>
@endsection
