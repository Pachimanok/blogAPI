<header class="main-header">
    <div class="zerogrid">
        <div class="row">
            <div class="col-8 mx-auto">
                <!-- Menu-main -->
                <div id='cssmenu' class="align-center">
                    <ul>
                        <li class="active"><a href='index.html'><span>Home</span></a></li>
                        <li><a href='#post'><span>últimos post</span></a></li>
                        <li><a href='archive.html'><span>Blog</span></a></li>
                        <li class='last'><a href='contact.html'><span>Contacto</span></a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/home') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                </li>
                            @else
                                <li> <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                </li>

                                @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </div>
</header>