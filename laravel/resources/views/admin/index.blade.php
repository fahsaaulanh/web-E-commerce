@extends('admin.layouts.master')

    @section('content')
        <div class="w-full p-5">
            <div class="w-full md:mt-5 mb-10 flex items-center justify-between">
                <h3 class="text-2xl hidden md:block">Dashboard</h3>
                <button id="sidebar-toggler" class="md:hidden"><i class="fas fa-bars"></i></button>
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
                                    class="text-white bg-red-500 px-4 py-2 rounded-md"
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
            </div>
            <div class="w-full flex items-center justify-between">
                <h1>Content</h1>
            </div>
        </div>
    @endsection

@show