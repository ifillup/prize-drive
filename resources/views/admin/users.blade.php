@extends('admin.dashboard')

@section('main')
<h1>Users</h1>
<table class="table">
    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Email</th>

      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>

        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>@mdo</td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
