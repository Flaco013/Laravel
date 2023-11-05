<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function show($name, $lastname = "doe"){
        return "Hola: " .$name. " " .$lastname;
       
       }
       
}
