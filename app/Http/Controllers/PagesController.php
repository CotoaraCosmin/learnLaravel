<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel!!';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title',$title);
    }
    
    public function playground(){
        $data = array(
        'htmlcssTitle' => 'HTML & CSS stuff and small projects',
        'htmlcss' =>'Basic HTML/HTML5 & CSS',
        'vuejsTitle' => 'Vue.js',
        'vuejsDescription' => 'Some Vue.js basics'
        );
        return view('pages.playground')->with($data);
    }
   
}