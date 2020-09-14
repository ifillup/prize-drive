@extends('admin.dashboard')

@section('main')
<h1>Users</h1>
<table class="table">
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
