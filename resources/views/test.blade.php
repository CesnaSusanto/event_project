<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>cek</title>
</head>
<body class="bg-[#131B21]">
    <nav class="bg-[#333A3F] w-full h-[75px] border-b-[3px] px-8 border-b-[#007DE4] shadow-lg shadow-[#007de49f] sticky z-10 top-0">
        <div class="h-full w-full flex flex-row justify-between items-center">
            <img src="img/logo.png" alt="logo" srcset="" class="h-full object-contain">
            <div class="flex gap-4 items-center text-white uppercase">
                    @if (Route::has('login'))
                                    @auth
                                        <a
                                            href="{{ url('/dashboard') }}"                                        >
                                            Dashboard
                                        </a>
                                    @else
                                        <a
                                            href="{{ route('login') }}"                                        >
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
    <div id="dashboard" class="relative">
        <div id="banner" class="w-full h-[600px] bg-cover" style="background-image: url('img/banner.jpeg');">
            <div class="inner-banner h-full w-full flex items-center justify-center py-10 backdrop-blur-sm bg-black/50 ">
                <img src="img/banner.jpeg" alt="" class="h-full object-contain">
                
            </div>
            
        </div>
        <div id="trending" class="h-screen bg-red-500">

        </div>
        <div id="NearBy" class="h-screen bg-blue-500">

        </div>
    </div>


</body>
</html>