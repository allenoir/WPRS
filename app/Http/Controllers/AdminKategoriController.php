<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kategori.index',[
            'kategori'=> Kategori::all()
            
        ]);
    }

    public function create()
    { 
        return view('admin.kategori.create');

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
            'title' => 'required'
        ]);

        Kategori::create([
            'name' => $request->input('title'),
            'slug' => strtolower($request->input('title'))
        ]);

        return redirect('/dashboard/kategori')
            ->with('message', 'Kategori berhasil ditambahkan!');
    }
    public function edit($slug)
    {
        return view('admin.kategori.edit',[
        ])
            ->with('kategoris', Kategori::where('slug', $slug)->first());
            
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
        ]);
        Kategori::where('slug', $slug)
            ->update([
                'name' => $request->input('title'),
                'slug' => strtolower($request->input('title'))
            ]);

        return redirect('/dashboard/kategori')
            ->with('message', 'Your kategori has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $destination = Kategori::where('slug', $slug);
        $destination->delete();

        return redirect('/dashboard/kategori')
            ->with('message', 'Your destination has been deleted!');
    }
    /**
     * Store a newly created resource in storage.
     */
    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('admin.kategori.show',[
            "kategoris" => $kategori,
        ]);
        
    }
}
