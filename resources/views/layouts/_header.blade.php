<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      LaraBBS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登录</a></li>
          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">注册</a></li>
        @else
          <li class="nav-item dropdown">
            <img src="https://cdn.learnku.com/uploads/avatars/44096_1596073445.jpg!/both/30x30" alt="{{ Auth::user()->name }}">
            <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="">个人中心</a>
              <a class="dropdown-item" href="">编辑资料</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" id="logout">
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button class="btn btn-block btn-danger btn-sm" type="submit" name="button">退出</button>
                </form>
              </a>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
