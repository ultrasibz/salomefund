<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::middleware('auth')->group(function (){
    Route::get('/', \App\Http\Livewire\Groups\GroupIndex::class)->name('home');
    Route::get('/group', \App\Http\Livewire\Groups\GroupIndex::class)->name('group.index');
    Route::get('/group/{group}/show', \App\Http\Livewire\Groups\GroupShow::class)->name('group.show');
    Route::get('/group/{group}/user/add', \App\Http\Livewire\Groups\GroupUserAdd::class)->name('group.user.add');
    Route::get('/group/{group}/user/{user}/deposits', \App\Http\Livewire\Groups\GroupUserDeposits::class)->name('group.user.deposits');
    Route::get('/group/{group}/user/{user}/loans', \App\Http\Livewire\Groups\GroupUserLoans::class)->name('group.user.loans');
    Route::get('/user/{user}/show', \App\Http\Livewire\Profile\ProfileEdit::class)->name('user.show');
    Route::get('/user/{user}/documents', \App\Http\Livewire\Profile\ProfileDocuments::class)->name('user.documents');
    Route::get('/user/{user}/banks', \App\Http\Livewire\Profile\ProfileBank::class)->name('user.banks');

});

