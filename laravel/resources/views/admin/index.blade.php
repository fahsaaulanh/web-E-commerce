@extends('admin.layouts.master')

    @section('content')
        <div class="w-full p-5">
            <nav class="w-full md:mt-5 mb-10 flex items-center justify-between">
                <h3 class="text-2xl hidden lg:block">Dashboard</h3>
                <button id="sidebar-toggler" class="lg:hidden text-xl focus:outline-none transition duration-300 transform hover:scale-125"><i class="fas fa-bars"></i></button>
                <!-- Authentication Links -->
                <ul>
                    @guest
                        <li>
                            <a class="text-green-500" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="text-green-500" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                            <li>
                                <a 
                                    class="text-white bg-red-500 transition duration-200 hover:bg-red-700 px-4 py-2 rounded-md"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                    @endguest
                </ul>
            </nav>
            <div class="w-full flex flex-col items-start justify-between rounded-md overflow-hidden">
                <!-- heading -->
                <div class="w-full flex justify-between items-center mb-10 pt-5">
                    <h3 class="text-2xl">Produk tersedia</h3>
                    <!-- route tambah -->
                    <a href="{{ url('admin/add') }}" class="px-3 py-2 rounded-md bg-green-500 transition duration-200 hover:bg-green-600 text-white text-sm"><i class="fas fa-plus"></i> Tambah produk</a>
                </div>

                <!-- Content -->
                <div class="w-full overflow-x-auto">
                    <table class="shadow-lg bg-white w-full text-sm">
                        <thead>
                            <tr>
                                <th class="bg-gray-100 border text-left px-8 py-4">ID</th>
                                <th class="bg-gray-100 border text-left px-8 py-4">Nama produk</th>
                                <th class="bg-gray-100 border text-left px-8 py-4">Harga produk</th>
                                <th class="bg-gray-100 border text-left px-8 py-4">Info Diskon</th>
                                <th class="bg-gray-100 border text-left px-8 py-4">Stok tersedia</th>
                                <th class="bg-gray-100 border text-left px-8 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <!-- START : Body content -->
                        <tr>
                            <!-- DB : id produk -->
                            <td class="border px-8 py-4">1</td>
                            <!-- DB : nama produk -->
                            <td class="border px-8 py-4">Coffee Ku</td>
                            <!-- DB : harga produk -->
                            <td class="border px-8 py-4">15.000</td>
                            <!-- DB : promo tersedia -->
                            <td class="border px-8 py-4">Tidak sedang diskon</td>
                            <!-- DB : stok tersedia -->
                            <td class="border px-8 py-4">150</td>
                            <td class="border px-8 py-4">
                                <!-- route edit -->
                                <a href="" class="inline-block text-white bg-yellow-500 transition duration-200 hover:bg-yellow-600 py-1 px-2 rounded-md"><i class="fas fa-pencil-alt"></i></a>
                                <!-- route delete -->
                                <a href="" class="inline-block text-white bg-red-500 transition duration-200 hover:bg-red-700 py-1 px-2 rounded-md"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    @endsection

@show