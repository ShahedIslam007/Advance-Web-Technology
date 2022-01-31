<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function product()
    {
        $product = array("Web Development","Software Development","Digital Marketing","Graphics Design");
        return view('product')->with('product',$product);
    }

    public function team()
    {
        $team = array("Web Developer","Software Developer","Marketing","Graphics Designer");
        return view('team')->with('team',$team);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
