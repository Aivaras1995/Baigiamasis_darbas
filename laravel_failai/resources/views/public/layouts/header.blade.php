                        <li>
                            <a href="{{route('home')}}"
                               class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Home</a>
                        </li>
                        <li>
                            <a href="{{route('category-products.list', 'elektronika')}}"
                               class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">Elektronika</a>
                        </li>

                    </ul>
                    <x-dark-mode-switch :enabled="true"/>
                    @auth
                        <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                            <li>
                                <span>{{auth()?->user()?->email}}</span>
                            </li>
                            @if (auth()?->user()?->isPersonnel())
                                <li>
                                    <a href="{{route('dashboard')}}">
                                        {{ __('Dashboard') }}
                                    </a>
                                </li>
                            @endauth
                            <li>
                                <a class="justify-between" href="{{route('profile.edit')}}">
                                    {{ __('Edit profile') }}
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{route('logout')}}"
                                       onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    @endauth

                    @guest()
                        <ul class="hidden w-8/12 md:flex items-center justify-center space-x-8">
                            <li>
                                <a href="{{route('login')}}">
                                    {{ __('Login') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('register')}}">
                                    {{ __('Register') }}
                                </a>
                            </li>
                        </ul>
                    @endguest









                    <div class="md:w-2/12 justify-end flex items-center space-x-4 xl:space-x-8">
                        <div class="hidden lg:flex items-center">
                            <button onclick="toggleSearch()" aria-label="search items"
                                    class="w-5 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                <img class="transform rotate-90 dark:hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg"
                                     alt="search">
                                <img class="transform rotate-90 dark:block hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg"
                                     alt="search">
                            </button>
                            <input id="searchInput" type="text" placeholder="search"
                                   class="hidden text-sm dark:bg-gray-900 dark:placeholder-gray-300 text-gray-600 rounded ml-1 border border-transparent focus:outline-none focus:border-gray-400 px-1"/>
                        </div>
                        <div class="hidden lg:flex items-center space-x-4 xl:space-x-8">
                            <button aria-label="view favourites"
                                    class="w-6 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                <img class=" dark:hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3.svg"
                                     alt="favourites">
                                <img class=" dark:block hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3dark.svg"
                                     alt="favourites">
                            </button>
                            <button aria-label="go to cart" onclick="window.location.href = '{{route('order.cart')}}'"
                                    class="w-6 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                <img class=" dark:hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg"
                                     alt="bag">
                                <img class=" dark:block hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg"
                                     alt="bag">
                            </button>
                        </div>

                        <div class="flex lg:hidden">
                            <button aria-label="show options" onclick="mdOptionsToggle()"
                                    class="text-black dark:text-white dark:hover:text-gray-300 hidden md:flex focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                <img class=" dark:hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg"
                                     alt="toggler">
                                <img class=" dark:block hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg"
                                     alt="toggler">
                            </button>

                            <button aria-label="open menu" onclick="openMenu()"
                                    class="text-black dark:text-white dark:hover:text-gray-300 md:hidden focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                <img class=" dark:hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg"
                                     alt="toggler">
                                <img class=" dark:block hidden"
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg"
                                     alt="toggler">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- For small screen -->
            <div id="mobile-menu"
                 class="hidden absolute dark:bg-gray-900 z-10 inset-0 md:hidden bg-white flex flex-col h-screen w-full">
                <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-4 p-4">
                    <div class="flex items-center space-x-3">
                        <div>
                            <img class="dark:hidden"
                                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                            <img class="dark:block hidden"
                                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg"
                                 alt="search">
                        </div>
                        <input type="text" placeholder="Search for products"
                               class="text-sm dark:bg-gray-900 text-gray-600 placeholder-gray-600 dark:placeholder-gray-300 focus:outline-none"/>
                    </div>

                    <button onclick="closeMenu()" aria-label="close menu"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                        <img class="dark:hidden"
                             src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6.svg" alt="cross">
                        <img class="dark:block hidden"
                             src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6dark.svg" alt="cross">
                    </button>
                </div>
                <div class="mt-6 p-4">
                    <ul class="flex flex-col space-y-6">
                        <li>
                            <a href="javascript:void(0)"
                               class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                Home
                                <div>
                                    <img class="dark:hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg"
                                         alt="arrow">
                                    <img class="dark:block hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg"
                                         alt="arrow">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                Furniture
                                <div>
                                    <img class="dark:hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg"
                                         alt="arrow">
                                    <img class="dark:block hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg"
                                         alt="arrow">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                Lookbook
                                <div>
                                    <img class="dark:hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg"
                                         alt="arrow">
                                    <img class="dark:block hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg"
                                         alt="arrow">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800">
                                Support
                                <div>
                                    <img class="dark:hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg"
                                         alt="arrow">
                                    <img class="dark:block hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg"
                                         alt="arrow">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="h-full flex items-end">
                    <ul class="flex flex-col space-y-8 bg-gray-50 w-full py-10 p-4 dark:bg-gray-800">
                        <li>
                            <a href="{{route('order.cart')}}"
                               class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                                <div>
                                    <img class="w-5 dark:hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg"
                                         alt="bag">
                                    <img class="w-5 dark:block hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg"
                                         alt="bag">
                                </div>
                                <p class="text-base">Cart</p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                                <div>
                                    <img class="w-5 dark:hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3.svg"
                                         alt="favourites">
                                    <img class="w-5 dark:block hidden"
                                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg3dark.svg"
                                         alt="favourites">
                                </div>
                                <p class="text-base">Wishlist</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

