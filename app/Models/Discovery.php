<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discovery extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' ,
        'user_id',
        'author',
        'content' ,
        'tagline' ,
        'category' ,
        'city' ,
        'address' ,
        'latitude' ,
        'longitude' ,
        'cover',

    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
    public function users() {
        return $this->belongsTo(User::class);

    }
}
