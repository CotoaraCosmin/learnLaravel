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

    public function AppliedAccessibility(){
        $data = array(
            'title'=>'Applied Accessibility',
            'options'=>['have well-organized code that uses appropriate markup','ensure text alternatives exist for non-text and visual content','create an easily-navigated page that`s keyboard-friendly']
        );
        return view('htmlcss.accessibility')->with($data);
    }

    public function Responsive(){
        $title = 'Responsive Web Design';
        return view('htmlcss.responsive')->with('title',$title);
    }

    public function Flexbox(){
        $title = 'CSS Flexbox';
        return view('htmlcss.flexbox')->with('title',$title);
    }

    public function Grid(){
        $title = 'CSS Grid';
        return view('htmlcss.grid')->with('title',$title);
    }
}
