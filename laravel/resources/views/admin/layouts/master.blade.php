<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang {{ Auth::user()->name }}</title>
    <!-- tailwindCSS -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex font-main" id="wrapper">
        <!-- START : Sidebar -->
        <div class="overlay-close hidden fixed top-0 left-0 w-screen h-screen bg-gray-800 bg-opacity-50"></div>
        <div id="sidebar" class="text-white transition duration-300 fixed md:sticky top-0 left-0 transform -translate-x-full md:translate-x-0 w-72 md:w-96 h-screen bg-gray-800 z-20 flex flex-col items-center justify-start">
            <!-- user info -->
            <div id="user-info" class="py-10 mb-5 flex flex-col justify-center items-center">
                <img src="{{ asset('icons/user-ex.png') }}" class="mb-3" alt="User profile">
                <span>{{ Auth::user()->name }}</span>
                <span>Admin</span>
            </div>
            <!-- nav list -->
            <ul class="flex flex-col justify-center items-start w-full h-3/6 mb-5 text-sm">
                <li class="nav-link w-full pt-2"><a class="flex pl-5 hover:bg-gray-900 p-2.5 mx-4 rounded-md" href="#"><img class="mr-3" src="{{ asset('icons/dashboard.svg') }}" alt="">Dashboard</a></li>
                <li class="nav-link w-full pt-2"><a class="flex pl-5 hover:bg-gray-900 p-2.5 mx-4 rounded-md" href="#"><img class="mr-3" src="{{ asset('icons/delivery.svg') }}" alt="">Delivery</a></li>
                <li class="nav-link w-full pt-2"><a class="flex pl-5 hover:bg-gray-900 p-2.5 mx-4 rounded-md" href="#"><img class="mr-3" src="{{ asset('icons/shopping-cart.svg') }}" alt="">Shopping Cart</a></li>
                <li class="nav-link w-full pt-2"><a class="flex pl-5 hover:bg-gray-900 p-2.5 mx-4 rounded-md" href="#"><img class="mr-3" src="{{ asset('icons/receipe.svg') }}" alt="">Receipe</a></li>
                <li class="nav-link w-full pt-2"><a class="flex pl-5 hover:bg-gray-900 p-2.5 mx-4 rounded-md" href="#"><img class="mr-3" src="{{ asset('icons/my-info.svg') }}" alt="">My Information</a></li>
                <li class="nav-link w-full pt-2"><a class="flex pl-5 hover:bg-gray-900 p-2.5 mx-4 rounded-md" href="#"><img class="mr-3" src="{{ asset('icons/my-wallet.svg') }}" alt="">My Wallet</a></li>
                <li class="nav-link w-full pt-2"><a class="flex pl-5 hover:bg-gray-900 p-2.5 mx-4 rounded-md" href="#"><img class="mr-3" src="{{ asset('icons/customer-success.svg') }}" alt="">Customer Success</a></li>
                <!-- <li class="pl-5"><a href="#"></a></li> -->
            </ul>
        </div>
        <!-- END : Sidebar -->

        <!-- START : Content -->
        @yield('content')
        <!-- END : Content -->
    </div>

    <script src="https://kit.fontawesome.com/b07851900c.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>