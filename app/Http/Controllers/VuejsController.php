<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuejsController extends Controller
{
    public function appOne(){
        return view('vueJs.appOne');
    }
}
