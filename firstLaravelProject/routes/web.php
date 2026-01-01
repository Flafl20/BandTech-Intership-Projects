<?php

use App\Http\Controllers\FlightsController;
use App\Http\Controllers\UserController;
use App\Models\Flight;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/id/{id?}/{country?}", function (int $id = 30, string $country = "baghdad") {
//     return "my age " . $id . " i live in " . $country;
// });

// Route::get("/name/{name}/{age}", function (string $name, int $age) {
//     return "welcome " . $name . " your age is " . $age;
// })->where(['name' => '[a-z]+', 'age' => '[1-9]+']); // using regular exp to validate the query

// // grouping routes have the same father 
// Route::prefix("username")->group(function () {

//     Route::get("name/{name}", function ($name) {
//         return "your name is " . $name;
//     });
//     Route::get("age/{age}", function ($age) {
//         return "your age is " . $age;
//     });
// });

// Route::fallback(function () {
//     return "page not found";
// });

// Route::get("greeting", [UserController::class, "greetings"]);
// Route::get("login/{name}", [UserController::class, "login"]);

Route::get("/welcome", [UserController::class, "greetings"]);

Route::prefix("flights")->group(function () {

    Route::get("/", [FlightsController::class, "index"])->name("flights");
    Route::get("/create_flights", [FlightsController::class, "create"])->name("create_flights");
    Route::post("/store_flights", [FlightsController::class, "storeFlight"])
        ->name("storeFlights");
    Route::get("/update_flights/{id}", [FlightsController::class, "updateFlights"])->name("update_flights");
    Route::post("/update_flights/{id}", [FlightsController::class, "storeUpdatedFlight"])->name("storeUpdatedFlight");
    Route::get("/delete_flight/{id}", [FlightsController::class, "deleteFlight"])->name("delete_flight");
});
