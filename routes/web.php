<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $value = session()->all();
    //  $value=session()->get('name');
    // $value=session()->except(['name']);
    // session()->only(['key1','key2']);
    // $value=session()->exists('name');
    session()->increment('count', $increment = 2);
    // session()->decrement('count');
    // session()->regenerate();
    // if (session()->exists('name')) {
    // if (session()->has('name')) {
    //     $value = session()->get('name');
    // } else {
    //     echo "Name doesn't exist ! ";
    // }
    echo "<pre>";
    print_r($value);
    echo "</pre>";
});
Route::get('/add', function () {
    session(['name' => 'B.D king', 'roll' => '5015']);
    //session()->put('name','Basharat Ali');
});
Route::get('/delete', function () {
    // session()->forget('roll');
    session()->flush();
});
