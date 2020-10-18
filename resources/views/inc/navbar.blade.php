<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">

        <a class="navbar-brand ml-4" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-box-open"></i>
                        Boxes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-question-circle"></i>
                         FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-user-circle"></i>
                         Account
                    </a>
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-crown"></i>
                            Top
                    </a>
                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{secure_url('/admin')}}">

                                Admin
                        </a>
                    </li>
                    <li class="nav-item">


                        <div class="d-flex rounded-pill ml-5 p-2 nav-badge">
                            <img src="https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/user.jpg" style="height: 50px;" class="rounded-circle">
                    <div class="">
                            <p class="mb-0 ml-2">{{ Auth::user()->transactions->sum('value')}}</p>

                        <button class="btn">DEPOSIT</button>
                    </div>
                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
