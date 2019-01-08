<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlcssController extends Controller
{
    public function Htmlcss() {
        $title = 'Basic HTML & HTML5';
        return view('htmlcss.htmlcss')->with('title',$title);
    }
    
    public function CSS(){
        $data = array(
            'title' => 'Basic CSS',
            'options' =>['color','fonts','positioning','spacing','sizing','decorations','transitions']
        );
        return view('htmlcss.css')->with($data);
    }

    public function AppliedVisualDesign(){
        $title = 'Applied Visual Design';
        return view('htmlcss.visual')->with('title',$title);
    }
}
