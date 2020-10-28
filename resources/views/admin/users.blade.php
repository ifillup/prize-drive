@extends('admin.dashboard')

@section('main')
<h4 class='bg-light rounded m-2'>Users</h4>
<table class="table table-striped bg-light rounded m-2 shadow">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Admin</th>
        <th scope="col">Grant Admin</th>
        <th scope="col">Balance</th>
        <th scope="col">Credit Account</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->admin ? 'Admin' : 'User'}}</td>
            <td>
                <form action="{{ secure_url('/admin/toggle') }}" method="POST">
                    @csrf
                    @method('PATCH')
                        <input type="hidden" name="user_id" value="{{$user->id}}" >
                        <button class="btn {{$user->admin ? 'btn-secondary' : 'btn-primary'}} btn-sm " {{$user->admin ? 'disabled' : ''}} type="submit" >{{$user->admin ? 'Demote' : 'Admin'}}</button>
                </form>
            </td>
            <td>{{$user->transactions->sum('value')}}</td>
            <td>
                <form action="{{ secure_url('/admin/account') }}" method="POST">
                @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}" >
                    <input type="number" min="-9999" max="9999" name="value" id="">
                    <button class="btn btn-primary btn-sm" type="submit" >Credit/Debit</button>
                </form>
            </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
