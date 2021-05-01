@extends('admin.layouts.master')

    @section('content')
        <div class="w-full p-5">
            <nav class="w-full md:mt-5 mb-10 flex items-center justify-between">
                <h3 class="text-2xl hidden lg:block">Dashboard</h3>
                <button id="sidebar-toggler" class="lg:hidden text-xl focus:outline-none transition duration-300 transform hover:scale-125"><i class="fas fa-bars"></i></button>
                <!-- Authentication forms -->
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
                    <h3 class="text-2xl">Tambah produk</h3>    
                </div>

                <!-- Content -->
                <div class="w-full overflow-x-auto">
                    <!-- form add -->
                    <form class="border p-5" action="" method="POST">
                        <!-- nama -->
                        <div class="w-full mb-6 flex flex-col">
                            <label for="input-nama" class="mb-3">Nama produk</label>
                            <input class="border focus:border-2 focus:outline-none border-green-500 px-5 py-2" type="text" name="input-nama" id="input-nama" placeholder="Masukkan nama produk">
                        </div>
                        <!-- deskripsi -->
                        <div class="w-full mb-6 flex flex-col">
                            <label for="input-deskripsi" class="mb-3">Deskripsi produk</label>
                            <input class="border focus:border-2 focus:outline-none border-green-500 px-5 py-2" type="text" name="input-deskripsi" id="input-deskripsi" placeholder="Masukkan deskripsi produk">
                        </div>
                        <!-- pemilik -->
                        <div class="w-full mb-6 flex flex-col">
                            <label for="input-pemilik" class="mb-3">Penjual</label>
                            <input class="border focus:border-2 focus:outline-none border-green-500 px-5 py-2" type="text" name="input-pemilik" id="input-pemilik" placeholder="{{ Auth::user()->name }}" disabled>
                        </div>
                        <!-- gambar -->
                        <div class="mb-6 flex flex-col">
                            <label for="input-file" class="mb-3">Tambah gambar</label>
                            <input type="file" name="input-file" id="input-file">
                        </div>
                        <div class="w-full pt-6 mb-6 flex text-white border-t">
                            <a href="#" class="px-3 py-2 rounded-md mr-3 bg-green-500">Tambah produk</a>
                            <a href="{{ route('admin') }}" class="px-3 py-2 rounded-md mr-3 bg-red-500">Batal & kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

@show