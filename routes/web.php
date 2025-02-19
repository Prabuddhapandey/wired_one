<?php

use Illuminate\Support\Facades\Route;
use App\_Livewire\MainComponent;
use App\_Livewire\HomeComponent;
use App\_Livewire\UserComponent;

//Route::get('/', function () {
//    return view('welcome');
////});
//
//Route::get('/', MainComponent::class);
//Route::get('/home', HomeComponent::class)->name('home');
//Route::get('/users' , UserComponent::class)->name('users');
Route::get('/', function () {
    return view('components.layout.app');
});
