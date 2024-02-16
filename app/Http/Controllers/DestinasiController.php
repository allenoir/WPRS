<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Kategori;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DestinasiController extends Controller
{
    public function index()
    {
        $title='';
        if(request('kategori')){
            $kategori = Kategori::firstWhere('slug', request('kategori'));
            $title= ' in '.$kategori->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title= ' by '.$author->name;
        }
        return view('destinasi',[
            "title" => "Destinasi".$title,
            "wisata" => Destinasi::latest()->filter(request(['search','kategori','author']))->paginate(12)->withQueryString()
        ]);
        
    }

    public function show(Destinasi $destinasi)
    {
        return view('post',[
            "title" => "terserah gua",
            "destinasis" => $destinasi,
            
        ]);
        
    }

    

    }
