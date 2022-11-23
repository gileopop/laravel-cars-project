@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">

        <div class="text-center text-lg font-normal text-teal-800">
            <h1 class="text-5xl font-sans">
                Cars
            </h1>
            <div class="p-6">
                <p>
                    A small MVC application.
                </p>
                <p>
                    You can create, edit and delete cars.
                </p>
                <p>
                    The cars are linked to the models table, which are different models of car. The models table is linked to the products table, and the products are different engines.
                </p>
                <p>
                    Login is supported, which you need to do to be able to add a car.
                </p>
            </div>
        </div>

        @if (Auth::user())
            <div class="pt-10 text-lg font-normal">
                <a href="/cars/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
                    Add a new car &rarr;
                </a>
            </div>
        @else
            <p class="py-12 text-lg font-normal text-red-500">
                Please <a href="/login" class="no-underline hover:underline font-normal">log in</a> to add a new car.
            </p>
        @endif

        <div class="w-5/6 py-10">
            @foreach ($cars as $car)
                <div class="m-auto">
                    @if (isset(Auth::user()->id) && Auth::user()->id == $car->user_id)
                        <div class="float-right">
                            <a href="/cars/{{ $car->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">
                                Edit &rarr;
                            </a>
                            <form action="/cars/{{ $car->id }}" method="POST" class="pt-3">
                                @csrf
                                @method('delete')
                                <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500">
                                    Delete &rarr;
                                </button>
                            </form>
                        </div>
                    @endif
                    
                    @if ($car->image_path)
                        <div class="">
                            <img 
                                src="{{ asset('images/' . $car->image_path) }}" 
                                class="w-2/12 mb-8 shadow-xl"
                                alt="Car image">
                        </div>
                    @endif
                    <div>
                        <span class="uppercase text-blue-500 font-bold text-xs italic">
                            Founded: {{ $car->founded }}
                        </span>
                        <h2 class="text-grey-700 text-5xl hover:text-gray-500">
                            <a href="/cars/{{ $car->id }}">
                                {{ $car->name }}
                            </a>                        
                        </h2>
                        <p class="text-lg text-gray-700 py-6">
                            {{ $car->description }}
                        </p>
                        <hr class="mt-4 mb-8">
                    </div>
                    

                </div>
            @endforeach
        </div>

    </div>

@endsection