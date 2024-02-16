<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\sluggable;

class Destinasi extends Model
{
    use HasFactory;
    use sluggable;

    protected $guarded = ['id'];
    protected $with = ['kategori','author'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title','like','%'. $search .'%')
            ->orWhere('body','like','%'. $search .'%');
        });

        $query->when($filters['kategori'] ?? false, function($query, $kategori){
            return $query->whereHas('kategori', function($query) use ($kategori){
                $query->where('slug', $kategori);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('name', $author);
            });
        });
    }


    public function kategori()
    {
        return $this->belongsTo(Kategori::class);  
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

    public function image_path()
    {
        if ($this->image_path && exists(public_path('images/destinasi' . $this->image_path))) {
            return asset('images/destinasi' . $this->image_path);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function getRouteKeyName(): string
{
    return 'slug';
} 
    
}

