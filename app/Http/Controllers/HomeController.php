<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Picture;
use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view('index', ['homes' => Home::homes(), 'pictures' => Picture::index()]);
    }

    public function post() {
        return view('post');
    }

    public function about() {
        return view('about', ['abouts' => About::index(), 'abouts' => About::index('image')]);
    }

    public function contact() {
        return view('contact');
    }
}
