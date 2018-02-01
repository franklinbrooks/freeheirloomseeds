@if (Session::has('success'))
    <div class="flashMessage green"> {{ Session::get('success') }} </div>
@endif

<!-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Logout</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif -->


    <div class="content">
        <a href="http://localhost/freeheirloomseeds/">
          <h1 class="center hide-on-med-and-down">FreeHeirloomSeeds.org</h1>
          <h1 class="center hide-on-large-only">Free<br />Heirloom<br />Seeds.org</h1>
        </a>
        <br />
    </div>
</div>
<nav>
    <div class="nav-wrapper green lighten-2 links">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="hide-on-med-and-down green lighten-2">
        <li><a href="/">home</a></li>
        <li><a href="seeds">seeds</a></li>
        <li><a href="about">about</a></li>
        <li><a href="volunteer">volunteer</a></li>
        <li><a href="distributors">distributors</a></li>
        <li><a href="donate">donate</a></li>
        <li><a href="links">links</a></li>
        <li><a href="contact">contact</a></li>

        @if (Route::has('login'))
          @auth
            <li><a href="{{ url('/dashboard') }}">dashboard</a></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
              </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                   </form>
            </li>
          @endauth
        @endif

      </ul>
      <ul class="side-nav green lighten-2 " id="mobile-demo">
        <li><a href="/">home</a></li>
        <li><a href="seeds">seeds</a></li>
        <li><a href="about">about</a></li>
        <li><a href="volunteer">volunteer</a></li>
        <li><a href="distributors">distributors</a></li>
        <li><a href="donate">donate</a></li>
        <li><a href="links">links</a></li>
        <li><a href="contact">contact</a></li>
        @if (Route::has('login'))
          @auth
            <li><a href="{{ url('/dashboard') }}">dashboard</a></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
              </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                   </form>
            </li>
          @endauth
        @endif
      </ul>
    </div>
</nav>
