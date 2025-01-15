<nav class="bg-[#333A3F] w-full h-[75px] border-b-[3px] px-8 border-b-[#007DE4] shadow-lg shadow-[#007de49f] sticky z-10 top-0">
        <div class="h-full w-full flex flex-row justify-between items-center">
            <img src="img/logo.png" alt="logo" srcset="" class="h-full object-contain">
            <div class="flex gap-4 items-center text-white uppercase">
                    @if (Route::has('login'))
                                    @auth
                                        <a
                                            href="{{ url('/dashboard') }}">
                                            Dashboard
                                        </a>
                                    @else
                                        <a
                                            href="{{ route('login') }}">
                                            Login
                                        </a>

                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class=" px-[10px] py-[7px] bg-white text-[#333A3F] rounded-md font-semibold"
                                            >
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                            @endif
                    </div>
        </div>
    </nav>