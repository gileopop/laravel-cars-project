@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <ul class="flex justify-center space-x-4">
                    <li>
                        <a href="/cars" class="no-underline hover:underline text-lg font-normal text-teal-800 uppercase" title="Cars">Cars</a>
                    </li>
                    <li>
                        <a href="/login" class="no-underline hover:underline text-lg font-normal text-teal-800 uppercase" title="Login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection