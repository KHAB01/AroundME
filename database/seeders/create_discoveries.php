<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_discoveries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discoveries')->insert([
            'title'=>'Lac marwani' ,
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
            'cover'=>'/lac.jpg',

        ]);
        DB::table('discoveries')->insert([
            'title'=>'Paradise Valley' ,
            'user_id'=>'1',
            'author'=>'hanane',
            'content'=>"<p>Niché aux contreforts des montagnes d’Atlas, la Vallée du Paradis est incontournable pour ceux qui veulent voir la nature marocaine. Faites une balade ou aller baigner dans les lagunes—mais attention, l’eau est froide. La route peut être difficile à suivre, donc une excursion guidée d’une journée ou d'une demi-journée est conseillée.</p>",
            'tagline' =>'nature',
            'category' =>'nature',
            'city' =>'Agadir',
            'address'=>'Imouzze des ida ou tanane, agadir' ,
            'latitude' =>'54654646',
            'longitude'=>'4545554' ,
            'cover'=>'/paradis.jpg',

        ]);
        DB::table('discoveries')->insert([
            'title'=>'Plage Imsouane' ,
            'user_id'=>'1',
            'author'=>'hanane',
            'content'=>"<p>l y a deux plages a Imsouane la petite sous le village et une autre beaucoup plus longue dans la baie ,au pied de hautes falaises .
Les débutants en surf ont la une zone bien protégée pour apprendre a surfer avec les différentes écoles du village.
Hors saison touristique tout le monde y trouvera son bonheur:
Baignade ,pèche ,repos et les meilleurs poissons et crustacés en tajines ou au BBQ chez Hassan sur le port</p>",
            'tagline' =>'nature',
            'category' =>'nature',
            'city' =>'Agadir',
            'address'=>'Imsouane' ,
            'latitude' =>'54654646',
            'longitude'=>'4545554' ,
            'cover'=>'/plage.jpg',

        ]);
    }
}
