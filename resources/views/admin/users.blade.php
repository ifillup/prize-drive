@extends('admin.dashboard')

@section('main')
<h1 class='bg-light'>Users</h1>
<table class="table bg-light">
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
