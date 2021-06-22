@extends('layouts.layout')

@section('content')

    <div class="wrapper pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type">Type - {{$pizza->type}}</p>
        <p class="base">Base - {{$pizza->base}}</p>
        <p class="toppigs">Extra Toppings: </p>
        <ul>
        
            @foreach($pizza->toppigs as $toppig)

            <li>{{ $toppig }}</li>

            @endforeach

        </ul>

    <!-- named route for the url with ids -->
        <form action="{{route('pizzas.destroy', $pizza->id)}}" method="POST">
        @csrf
        @method('DELETE') 
        <button>Complete order</button>
        </form>
    </div>

    <a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection
