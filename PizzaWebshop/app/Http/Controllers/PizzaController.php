<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{
        

    // We can protect the all pages and functions with the following construct method and only let logged in people access it.

    // public function __construct(){

    //     $this->middleware('auth');

    // }

    // In the controller we can put all the function we need the web.php file to execute or fire up so we stay organized and the code stays simpler and cleaner

    // the index is a naming convention (A lot of laravel devs commonly use the following names) that points to the file we want to take the functions from. They can be called whatever we want, they just need to be refrenced to the routing file so it can find them and execute them
    public function index(){
        



        // $pizzas = [


        //     ['type' => '4cheese', 'base' => 'Cheesy crust'],
        //     ['type' => 'Margeritta', 'base' => 'Garlic crust'],
        //     ['type' => 'veg supreme', 'base' => 'Thin & crispy']
    
    
        // ];

        // Reading records out of a database
        // The all(); method comes in automatically with all models. It's gonna look at the pizzas table and it will store them into the pizzas variable
        $pizzas = Pizza::all();
        // This method will output the data in a certain way or in a certain condition
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // This method will turn in the things based on a condition we apply
        // $pizzas = Pizza::where('type', 'hawaian')->get();
        // This method will get the latest retrieved data
        // $pizzas = Pizza::latest()->get();
    
        // With the request parameter we can grab something from the url that meets the inside of brackets requirement and we can do things with it
    
        // Or we can ignore defining them outside of the view and define them inside instead
        // $name = request('name');
        // $age = request('age');
    
        // like this: 
    
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            // 'name' => request('name'),
            // 'age' => request('age'),
            ]);

    }

    // This will grab the data out of the db and output it

    public function show($id){

        // To query the id of a record we need to do this. This will show the data out of the database when specify what number to display. If it can't find it, it will return a 404 Not found
        $pizza = Pizza::findOrFail($id);

// use the $id vriable to query the db for a record and then send it to the view

// Here it will call the id and put it into the $id variable inside of the function, and when we display the page /pizzas/1 it will put the number 1 where we wanted to put it inside the title to output it
// it is passing the view data into the variable
    
        return view('pizzas.show', ['pizza' => $pizza]);

    }

    // This will make a the form
    public function create(){

        return view('pizzas.create');

    }


    // This is for storing the data into the db

    public function store(){


        // The error_log(); method will log the returned values to the console
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppigs =  request('toppigs');
        // We are taking the instance of the pizza and we are saving it into the database
        $pizza->save();


        return redirect('/')->with('mssg', 'Thanks for your order!');

    }

    // This is for deleting the data out of the db

    public function destroy($id){

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');

    }
}
