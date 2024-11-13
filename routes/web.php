<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix("admin")->group(function(){
    Route::get("/", function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");
    Route::get("/course",function(){
        return view("admin.course");
    })->name("admin.course");
    Route::get("/chapter",function(){
        return view("admin.chapter");
    })->name("admin.chapter");
    Route::get("/lesson",function(){
        return view("admin.lesson");
    })->name("admin.lesson");

});