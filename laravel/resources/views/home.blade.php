@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>
            <!-- test components -->
            <div class="w-full h-32 bg-gray-900 my-5 text-white flex justify-center items-center">
                Test tailwind components
            </div>
        </div>
    </div>
</div>
@endsection
