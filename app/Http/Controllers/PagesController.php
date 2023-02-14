<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;


class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
