<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        return view('index/index');
    }
    public function book(){
        return view('index/book');
    }
    public function about(){
        return view('index/about');
    }
}
