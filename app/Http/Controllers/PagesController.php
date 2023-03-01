<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
            return view('pages.index');
    }
    public function about(){
        return view('pages.about')->with('title','About');
    }
    public function services(){
            $services=array('IT services', 'Blogging');
            return view('pages.services')->with(['title'=>'Services','services'=>$services]);
    }
}
