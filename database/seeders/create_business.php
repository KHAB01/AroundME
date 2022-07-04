<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_business extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discoveries')->insert([
            'title'=>'lac marwani' ,
            'user_id'=>'1',
            'author'=>'hanane',
            'content'=>"<p>Le lac Marouani, l'un des plus beaux lacs du Maroc, est populaire et attire des centaines de nouveaux visiteurs qui ont acquis sa beauté.</p>
<p>Se situant dans la partie occidentale du Haut-Atlas marocain et à 70 km au Nord –Est de la ville d’Agadir</p>",
            'tagline' =>'nature',
            'category' =>'nature',
            'city' =>'Agadir',
            'address'=>'Imouzze des ida ou tanane, agadir' ,
            'latitude' =>'54654646',
            'longitude'=>'4545554' ,
            'cover'=>'images/lac.jpg',

            ]);
    }
}
