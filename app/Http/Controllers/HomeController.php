<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return'Nama : Adinda Syafira Qolbin Salim <br> NIM : D212011043 <br> Kelas : KA7B';
    }
    public function contact(){
        return'sldindasalim@gmail.com';
    }
}

