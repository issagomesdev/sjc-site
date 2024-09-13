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

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('sobre-nos', function () {
  return view('sobre-nos');
})->name('sobre-nos');

Route::get('sjc-educacional', function () {
  return view('sjc-educacional');
})->name('sjc-educacional');

Route::get('info', function () {
  return view('info');
})->name('info');

Route::get('contato', function () {
  return view('contato');
})->name('contato');

// Route::post('send-email', function(){
//   return new \App\Mail\newLaravelTips();
// })->name("send-email");

Route::post('info', function(){
  \Illuminate\Support\Facades\Mail::send(
    new \App\Mail\newLaravelTips()
  );
  return redirect()->route('info')->with('status', 'Email Enviado com Sucesso!');
  // return ;
})->name("send-email");
