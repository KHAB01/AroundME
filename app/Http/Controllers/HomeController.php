<?php

namespace App\Http\Controllers;

use App\Models\Discovery;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 /*   public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listings=DB::table('listings')->get();
        $discoveries=DB::table('discoveries')->get();
        return view('frontend.home', compact('discoveries','listings'));
    }

    public function listing(){
        $listings= DB::table('listings')->paginate(6);
        return view('frontend.listings.listings',compact('listings'));
    }

    public function detailListing($id){
        $listing = DB::table('listings')->find($id);

        $viewresto=['Manger & boire','Vie nocturne , Restaurants'];
        $viewhotel=["Parc d'attraction, Activitées, 'Monuments','Hotels & Riads, Sports"];

            return view('frontend.listings.listing_restaurant', ['listing' => $listing, 'id' => $id ], compact('listing', 'id'));


    }

    public function listingsearch(){

        $search = request()->input('search');

        $city= request()->input('searchcity');

        $category= request()->input('category');

        $listings = DB::table("listings")
            ->where('city', $city)
            ->orWhere('category', $category)
            ->orWhere('tags', $search)
            ->get();

        return view('frontend.listings.search',compact('listings','city','search','category'));

    }

    public function payment(){
        return view('frontend.payment');
    }

    public function businesshome(){
        return view('business.home');
    }

    public function pricing(){
        return view('business.pricing');
    }
    public function packone(){
        return view('business.create_account');
    }

    public function discoveries(){

        return view('frontend.discoveries.blog');
    }
    public function contact(){

        return view('frontend.contact');
    }
    public function packtwo(){

        return view('business.silver');
    }
    public function packthree(){

        return view('business.gold');
    }

    public function events(){

        return view('frontend.events.events');
    }

}
