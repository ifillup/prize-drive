@extends('admin.dashboard')

@section('main')
<h4 class='bg-light rounded m-2'>Users</h4>
<table class="table table-striped bg-light rounded m-2 shadow ">

    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Admin</th>

      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>

        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>false</td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
