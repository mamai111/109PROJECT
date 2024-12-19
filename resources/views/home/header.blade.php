<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <!-- Toggle button for mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <!-- Left Side: Home -->
      <ul class="navbar-nav" style="margin-left: 20px;">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <!-- Right Side: Login and Register -->
      <div class="user_option d-flex align-items-center">
        @if (Route::has('login'))
          @auth
            <a href="{{url('myorders')}}" class="mr-3">
              My Orders
            </a>

            <a href="{{url('mycart')}}" class="mr-3">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i> [{{$count}}]
            </a>

            <!-- Logout Form -->
            <form style="padding: 0; margin-right: 20px;" method="POST" action="{{ route('logout') }}">
              @csrf
              <input class="btn btn-success" type="submit" value="Logout">
            </form>
          @else
            <a href="{{url('/login')}}" class="mr-3">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Login</span>
            </a>
            <a href="{{url('/register')}}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>Register</span>
            </a>
          @endauth
        @endif
      </div>
    </div>
  </nav>
</header>
