@extends('layouts.app')

@section('content')






  <body>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">

              <li class="nav-item">
              <a class="nav-link" href="{{url('/admin')}}">
                  <span data-feather="file"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/products') }}">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/boxes') }}">
                  <span data-feather="users"></span>
                  Boxes
                </a>
              </li>

            </ul>


          </div>
        </nav>


        <main class="py-4">
            @yield('main')
        </main>

      </div>
    </div>




@endsection
