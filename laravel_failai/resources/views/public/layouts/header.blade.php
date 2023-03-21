<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if(app()->getLocale() == 'en')
                        <a href="{{url()->current()}}?lang=lt">
                            <img src="{{asset('/img/Lt-flag.png')}}" alt="LT" width="32">
                        </a>
                    @else
                        <a href="{{url()->current()}}?lang=en">
                            <img src="{{asset('/img/Gb-flag.png')}}" alt="EN" width="32">
                        </a>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user_dashboard') }}">Pradžia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.categories.index') }}">Kategorijos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.products.index') }}">Produktai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">Profilis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">Mano krepšelis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Atsijungti</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

