<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function destinasi()
    {
        return $this->hasMany(Destinasi::class);  
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
}
