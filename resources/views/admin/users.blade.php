@extends('admin.dashboard')

@section('main')
<h4 class='bg-light rounded m-2'>Users</h4>
<table class="table table-striped bg-light rounded m-2 shadow">

    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Admin</th>
        <th scope="col">Balance</th>

      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>

        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>false</td>
        <td>{{$user->transactions->sum('value')}}</td>
        <td>
            <form action="{{ secure_url('/admin/account') }}" method="POST">
            @csrf
                <input type="hidden" name="user_id" value="{{$user->id}}" >
                <input type="number" name="value" id="">
                <button type="submit" >Credit/Debit</button>
            </form>

        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
