<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/busca-usuario/{name}/{lastname}", function($name, $lastname = "doe"){
 return "Hola: " .$name. " " .$lastname;

}) -> where(["name" => "[A-Za-z]+", "lastname" => "[A-Za-z]+"])->name("filtrado");

Route::get("/suma/{num1}/{num2}", function($num1, $num2){
return $num1 + $num2;
}) -> where(["num1"=>"[0-9]+","num2"=>"[0-9]+"]) ->name("suma");


Route:: get("/vista/{name}", function($name){
    return view("prueba", ["name" => $name]);
});