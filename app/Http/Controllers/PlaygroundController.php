<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaygroundController extends Controller
{
    public function services() {
        $data = array(
            'title' => 'Learn Basic HTML/HTML5 & CSS',
            'HTML' =>"Introduction to Basic HTML & HTML5",
            'CSS' => "Introduction to Basic CSS",
            'Visual'=>"Introduction to the Applied Visual Design",
            'Applied'=>'Introduction to the Applied Accessibility',
            'Responsive'=>'Introduction to the Responsive Web Design',
            'Flexbox'=>'Introduction to the CSS Flexbox',
            'Grid'=>'Introduction to the CSS Grid'
        );
        return view('pages.services')->with($data);
    }

    public function vuejs(){
        $data = array(
            'title' => 'VueJs Apps',
            'appOne' => 'VueJs App One'
        );
        return view('pages.vuejs')->with($data);
    }

    public function api(){
        return view('pages.api');
    }
}
