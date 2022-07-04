<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_title',
        'keywords',
        'category',
        'tags',
        'listing_tags',
        'city',
        'address',
        'latitude',
        'longitude',
        'logo',
        'cover',
        'gallery',
        'name',
        'email',
        'title',
        'tagline',
        'description',
        'phone',
        'monday_open',
        'monday_closed',
        'Tuesday_open',
        'Tuesday_closed',
        'Wednesday_open',
        'Wednesday_closed',
        'Thursday_open',
        'Thursday_closed',
        'Friday_open',
        'Friday_closed',
        'Saturday_open',
        'Saturday_closed',
        'Sunday_open',
        'Sunday_closed',
        'features',
        'price',
        'etat',
        'video',
        'user_id',
    ];

    public function users() {
        return $this->belongsTo(User::class);

    }

}
