@extends('layouts.layout')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <div class="content">
                    <img calss="restimg" src="/assets/pizza.png" alt="Pizza Logo">
                    
                    <div class="wrapper pizza-index">

                        <h1>Pizza Orders</h1>

                        @foreach($pizzas as $pizza)

                        <div class="pizza-item">
                            <img src="/assets/pizzaimg.png" alt="Pizza logo">
                            <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
                        </div>

                        @endforeach

                    </div>



                    <!--<div class="title m-b-md">Pizza Resturant</div>

                    
                    


                    

                    <!-- @for($i = 0; $i < count($pizzas); $i++)

                        <p>{{$pizzas[$i]['type']}}</p>

                    @endfor
                    @foreach($pizzas as $pizza)

                        <div>
                        
                            {{$loop->index}} {{$pizza['type']}} - {{$pizza['base']}}
                            @if($loop->first)
                            
                            <span>- First in the loop!</span>

                            @endif
                            @if($loop->last)


                            <span>- Last in the loop</span>

                            @endif

                        </div>

                    @endforeach -->

<!--                @foreach($pizzas as $pizza)
                    <div>
                                  {{ $pizza->name }}   - {{ $pizza->type }} - {{ $pizza->base }}  
                    </div>
                @endforeach -->
                </div>
            </div>
        </div>
    </div>

@endsection