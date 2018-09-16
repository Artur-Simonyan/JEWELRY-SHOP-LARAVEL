<?php

namespace App\Http\Controllers;

use App;

class AboutController extends Controller
{
    public function aboutRing($id){
       $img= App\about::ring ($id);
        return view ('about/about',compact ('img'));
    }
    public function aboutNecklace($id){
        $img=App\about::necklace ($id);
        return view ('about/about',compact ('img'));
    }
    public function aboutEarring($id){
        $img=App\about::earring($id);
        return view ('about/about',compact ('img'));
    }
    public function aboutBracelet($id){
        $img=App\about::bracelet ($id);
        return view ('about/about',compact ('img'));
    }
}
