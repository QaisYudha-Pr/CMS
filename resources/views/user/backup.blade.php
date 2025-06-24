
        @if (Route::has('login'))
            <nav class="flex gap-2 mr-4 ">
                @auth
                    <a class="m-2 p-2 mt-4 mb-4 gap-2 font-light text-lg   transition duration-300 ease-in-out hover:text-blue-700 hover:scale-105 "
                        href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                @else
                    <a class="m-2 p-2 mt-4 mb-4 gap-2 font-light text-lg  hover:text-blue-600 " href="{{ route('login') }}">
                        Log-in
                    </a>

                    @if (Route::has('register'))
                        <a class="m-2 p-2 mt-4 mb-4 gap-2 font-light text-lg  "
                            href="{{ route('register') }}">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
