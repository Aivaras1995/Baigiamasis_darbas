<header>
    <div class="logo">
        <img src="https://www.getfit.lt/wp-content/uploads/2016/09/Sportuok.lt_.jpeg"
             alt="Logo">
    </div>
    <div class="welcome-message">
        <h1>Howdy, administrator!</h1>
    </div>
    @auth

    <nav>
            <label tabindex="0" class="btn btn-ghost btn-circle avatar placeholder ">
                @if(app()->getLocale() == 'en')
                    <a href="{{url()->current()}}?lang=lt">
                        <img src="{{asset('/img/LT-Flag.svg')}}" alt="LT" width="32">
                    </a>
                @else
                    <a href="{{url()->current()}}?lang=en">
                        <img src="{{asset('/img/GB-Flag.svg')}}" alt="LT" width="32">
                    </a>
                @endif

                <a href="{{route('dashboard')}}" class="btn btn-primary">Pradžia</a>
                <a href="{{route('addresses.index')}}" class="btn btn-primary">Adresai</a>
                <a href="{{route('categories.index')}}" class="btn btn-primary">Kategorijos</a>
                <a href="{{route('orders.index')}}" class="btn btn-primary">Užsakymai</a>
                <a href="{{route('payments.index')}}" class="btn btn-primary">Mokėjimai</a>
                <a href="{{route('persons.index')}}" class="btn btn-primary">Asmenys</a>
                <a href="{{route('products.index')}}" class="btn btn-primary">Produktai</a>
                <a href="{{route('statuses.index')}}" class="btn btn-primary">Statusai</a>
                <a href="{{route('users.index')}}" class="btn btn-primary">Vartotojai</a>
                <a href="{{route('profile.edit')}}" class="btn btn-primary">Profilis</a>
                <a href="{{route('logout')}}" class="btn btn-primary">Atsijungti</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                </form>

            </label>
        </div>
    @endauth
    </nav>
</header>
