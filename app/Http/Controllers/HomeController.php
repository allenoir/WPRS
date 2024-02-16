<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            "title" => "Home",
            "wisata" => Destinasi::latest()->get(),
            "blog" => Blog::latest()->get()
        ]);
        
    }
}
