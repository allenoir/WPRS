<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title='';
        
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title= ' by '.$author->name;
        }

        return view('blog',[
            "title" => "Blog".$title,
            "blog" => Blog::latest()->filter(request(['search','user']))->paginate(12)->withQueryString()
        ]);
}

        public function show(Blog $blog)
        {
            return view('postingan',[
                "title" => "terserah gua",
                "blog" => $blog
            ]);
}

}