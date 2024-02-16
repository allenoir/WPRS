<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminDestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.destinasi.index',[
            'destinasis'=> Destinasi::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {        $kategori=Kategori::all();
        return view('admin.destinasi.create',[
            "title" => "a",
        ],compact("kategori"));

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

        $request->image->move(public_path('images/destinasi'), $newImageName);
        $excerpt=Str::limit($request->body, 220, '...');

        Destinasi::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'excerpt' => $excerpt,
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'kategori_id' => $request->input('kategori'),
            'slug' => SlugService::createSlug(Destinasi::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/dashboard/destinasi')
            ->with('message', 'Destinasi berhasil ditambahkan!');
    }

    public function edit($slug)
    {
        return view('admin.destinasi.edit',[
            "title"=>"wawan"
        ])
            ->with('destinasis', Destinasi::where('slug', $slug)->first());
            
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
        Destinasi::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'excerpt' => $excerpt,
                'latitude' => $request->input('latitude'),
                'longitude' => $request->input('longitude'),
                'kategori_id' => $request->input('kategori'),
                'slug' => SlugService::createSlug(Destinasi::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/dashboard/destinasi')
            ->with('message', 'Your destination has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $destination = Destinasi::where('slug', $slug);
        $destination->delete();

        return redirect('/dashboard/destinasi')
            ->with('message', 'Your destination has been deleted!');
    }
    /**
     * Store a newly created resource in storage.
     */
    /**
     * Display the specified resource.
     */
    public function show(Destinasi $destinasi)
    {
        return view('admin.destinasi.show',[
            "destinasis" => $destinasi,
        ]);
        
    }
}
