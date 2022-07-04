<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'adresse',
        'telephone',
        'description',
        'email',
        'website','city','startdate','enddate','facebook','twitter','instagram','youtube','cover','tags','latitude','longitude','logo',


    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
