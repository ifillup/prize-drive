@extends('layouts.app')

@section('content')

<main class="bg-white">


<div class="dashboard-container">
        <nav class='sidenav'>
            <ul class="">

                <li class="">
                <a class="" href="{{url('/admin')}}">

                    Users
                  </a>
                </li>
                <li class="">
                  <a class="" href="{{ url('/admin/products') }}">

                    Products
                  </a>
                </li>
                <li class="">
                  <a class="" href="{{ url('/admin/boxes') }}">

                    Boxes
                  </a>
                </li>

              </ul>
        </nav>

        <div class="pt-1 bg-white">
            @yield('main')

        </div>

    </div>

</main>


@endsection
