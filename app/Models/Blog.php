<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;

class Blog extends Model
{

    use HasFactory;
    use sluggable;

    protected $guarded = ['id'];
    protected $with = ['author'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title','like','%'. $search .'%')
            ->orWhere('body','like','%'. $search .'%');
        });

        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('name', $author);
            });
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');  
    }

        public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    } 
    
}


