<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return'Nama:Adinda Syafira Qolbin Salim';
    }
    public function contact(){
        return'sldindasalim@gmail.com';
    }
}

