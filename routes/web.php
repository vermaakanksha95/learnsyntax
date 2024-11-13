<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("admin")->group(function(){
    Route::get("/", function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");
    Route::get("/course",function(){
        return view("admin.course");
    })->name("admin.course");

});