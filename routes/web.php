<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
use App\Livewire\UserComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', HomeComponent::class)->name('home');
Route::get('/user' , UserComponent::class)->name('user');
