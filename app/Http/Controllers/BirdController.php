<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function index(){
        return view('pages.birds.create');
    }
}
