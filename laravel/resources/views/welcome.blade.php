<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- START : Header -->
    <header id="header" class="home-header w-full h-screen relative overflow-hidden flex flex-col items-center">
        <div class="header-overlay absolute top-0 left-0 w-full h-full bg-black opacity-50 z-10"></div>
        <div class="header-layer absolute top-0 left-0 w-full h-full bg-white z-30"></div>
        <nav id="navbar" class="w-full max-h-screen px-6 md:px-20 fixed top-0 left-0 py-8 transition-all duration-500 z-30 text-white flex justify-between items-center">
            <a href="#"><img src="{{ asset('icons/instagram.svg') }}" alt=""></a>
            <img class="w-12" src="{{ asset('img/logo.svg') }}" alt="">
            <button id="open-nav" class="w-8 focus:outline-none"><img class="w-full transition duration-300 hover:scale-150" src="{{ asset('icons/hamburger.svg') }}" alt=""></button>
            
            <!-- START : Nav list -->
            <ul id="nav-list" class="absolute top-0 left-0 w-screen h-screen transition-all duration-500 transform -translate-y-full bg-white text-black flex items-center justify-center flex-col text-xl md:text-2xl font-semibold md:font-bold">
                <li class="my-2 hover:text-yellow-950"><a href="#">Beranda</a></li>
                <li class="my-2 hover:text-yellow-950"><a href="#">Produk</a></li>
                <li class="my-2 hover:text-yellow-950"><a href="#">Tentang kami</a></li>
                @if (Route::has('login'))
                    <li class="my-5 font-normal text-lg">
                        @auth
                            <a class="bg-green-500 text-white w-32 inline-flex justify-center items-center py-2 hover:bg-green-700 rounded-md" href="{{ route('admin') }}">Dashboard</a>
                            <!-- logout btn -->
                            <a class="text-white w-32 inline-flex justify-center items-center py-2 bg-red-500 hover:bg-red-700 rounded-md"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        
                        @else
                            <a class="bg-yellow-950 text-white w-32 inline-flex justify-center items-center py-2 hover:bg-yellow-600 rounded-md" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="bg-red-400 text-white w-32 inline-flex justify-center items-center py-2 hover:bg-red-500 rounded-md" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </li>
                @endif
                <button id="close-nav" class="absolute top-0 right-0 m-10 w-6 focus:outline-none"><img class="transform transition duration-300 hover:scale-150 hover:-rotate-90" w-full" src="{{ asset('icons/close.svg') }}" alt=""></button>
            </ul>
            <!-- END : Nav list -->
        </nav>
        <!-- END : Login form -->
        <!-- START : Header content -->
        <div class="header-content text-white z-20 h-full flex flex-col justify-center items-center font-semibold pt-16">
            <h1 id="header-text" class="text-5xl md:text-7xl">Coffee beans</h1>
            <div id="header-btn" class="flex mt-10">
                <a class="border-2 text-sm md:text-base mx-2 px-4 py-3 rounded-sm border-white transition duration-300 hover:bg-white hover:text-black" href="#product">Belanja sekarang</a>
                <a class="border-2 text-sm md:text-base mx-2 px-4 py-3 rounded-sm border-white text-black bg-white" href="#">Buy me a coffee</a>
            </div>
        </div>
        <!-- END : Header content -->
    </header>
    <!-- END : Header -->

    <!-- START : Main content -->
    <main class="my-10">
        <!-- START : Produk -->
        <div id="product">
            <h1 class="text-center text-2xl">Produk kami</h1>
        </div>
        <!-- END : Produk -->
    </main>
    <!-- END : Main content -->

    <!-- START : Footer -->
    <footer class="py-8 sm:py-12">
        <div class="container mx-auto px-6 md:px-20">
            <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
                <!-- START : Top footer -->
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
                    <h5 class="text-xl font-bold mb-6">Features</h5>
                    <ul class="list-none footer-links">
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Cool stuff</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Random feature</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Team feature</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Stuff for developers</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Another one</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Last time</a>
                    </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
                    <h5 class="text-xl font-bold mb-6">Resources</h5>
                    <ul class="list-none footer-links">
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Resource</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Resource name</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Another resource</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Final resource</a>
                    </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                    <h5 class="text-xl font-bold mb-6">About</h5>
                    <ul class="list-none footer-links">
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Team</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Locations</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Privacy</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Terms</a>
                    </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                    <h5 class="text-xl font-bold mb-6">Help</h5>
                    <ul class="list-none footer-links">
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Support</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Help Center</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact Us</a>
                    </li>
                    </ul>
                </div>
                <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">
                    <h5 class="text-xl font-bold mb-6 sm:text-center xl:text-left">Stay connected</h5>
                    <div class="flex sm:justify-center xl:justify-start">
                    <a href="" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-red-600 hover:border-red-600">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    </div>
                </div>
                </div>
                <!-- END : Top footer -->

                <!-- START : Bottom footer -->
                <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 pt-6 sm:mt-12 sm:pt-12 border-t">
                <div class="sm:w-full px-4 md:w-1/6">
                    <strong>FWR</strong>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
                    <h6 class="font-bold mb-2">Address</h6>
                    <address class="not-italic mb-4 text-sm">
                    123 6th St.<br>
                    Melbourne, FL 32904
                    </address>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
                    <h6 class="font-bold mb-2">Free Resources</h6>
                    <p class="mb-4 text-sm">Use our HTML blocks for <strong>FREE</strong>.<br>
                    <em>All are MIT License</em></p>
                </div>
                <div class="px-4 md:w-1/4 md:ml-auto mt-6 sm:mt-4 md:mt-0">
                    <button class="px-4 py-2 bg-purple-800 hover:bg-purple-900 rounded text-white">Get Started</button>
                </div>
                <!-- END : Bottom footer -->
            </div>
        </div>
    </footer>
    <!-- END : Footer -->
    <!-- tilt js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.4.1/vanilla-tilt.min.js"></script>
    <script src="{{ asset('js/utilities/load.js') }}"></script>
    <script src="{{ asset('js/utilities/scroll.js') }}"></script>
    <script src="{{ asset('js/utilities/nav.js') }}"></script>
    <script>
        VanillaTilt.init(document.querySelector("#header-text"),{
            maxTilt: 50,
            speed: 600,
            scale: 1.2,
            transition: true,
            easing: "cubic-bezier(.03,.98,.52,.99)",
            perspective: 200,
        });
    </script>
</body>
</html>
