<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index',[
            'blog'=> Blog::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    { 
        return view('admin.blog.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images/blog'), $newImageName);
        $excerpt=Str::limit($request->body, 220, '...');

        Blog::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'excerpt' => $excerpt,
            'slug' => SlugService::createSlug(Blog::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/dashboard/blog')
            ->with('message', 'Blog berhasil ditambahkan!');
    }
    public function edit($slug)
    {
        return view('admin.blog.edit',[
        ])
            ->with('blogs', Blog::where('slug', $slug)->first());
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $excerpt=Str::limit($request->body, 220, '...');
        Blog::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'excerpt' => $excerpt,
                'slug' => SlugService::createSlug(Blog::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/dashboard/blog')
            ->with('message', 'Your blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $destination = Blog::where('slug', $slug);
        $destination->delete();

        return redirect('/dashboard/blog')
            ->with('message', 'Your destination has been deleted!');
    }
    /**
     * Store a newly created resource in storage.
     */
    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show',[
            "blogs" => $blog,
        ]);
        
    }
}