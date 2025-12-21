<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/id/{id?}/{country?}", function(int $id = 30, string $country = "baghdad"){
    return "my age " . $id . " i live in " . $country;
});

Route::get("/name/{name}/{age}", function(string $name, int $age){
    return "welcome " . $name . " your age is " . $age;
})->where(['name' => '[a-z]+', 'age' => '[1-9]+']); // using regular exp to validate the query

// grouping routes have the same father 
Route::prefix("username")->group(function(){

    Route::get("name/{name}", function($name){
        return "your name is " . $name;
    });
    Route::get("age/{age}", function($age){
        return "your age is " . $age;
    });
});

Route::fallback(function(){
    return "page not found";
});