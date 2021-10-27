<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $location = 'Beirut';
$apiKey = config('services.openweather.key');
// $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}");
$response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}");
$responseFuture = Http::get("https://api.openweathermap.org/data/2.5/forecast/daily?q={$location}&cnt=16&appid={$apiKey}&units=metric");
// dd($responseFuture->json());
// dump($response->json());
    return view('welcome',[
        'currentWeather'=> $response->json(),
        'futureWeather'=> $responseFuture->json(),
    ]);

Route::view('/', 'welcome');
    
});
