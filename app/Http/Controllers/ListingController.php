<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{

    public function index()
    {
        $listings = Listing::latest()->paginate(5);

        return view('backend.listings.index',compact('listings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }




    public function create()
    {
        return view('backend.listings.create');
    }


    public function store(Request $request)
    {


            $path_logo = $request->file('logo')->store('images');
            $path_cover = $request->file('cover')->store('images');
            $path_gallery = $request->file('gallery')->store('images');
            $listing= new Listing;
            $listing->listing_title=$request->listing_title ;
            $listing->status=$request->listing_title ;
            $listing->keywords=$request->keywords ;
            $listing->category=$request->category ;
            $listing->cover=$path_logo ;
            $listing->logo=$path_cover ;
            $listing->gallery=$path_gallery ;
            $listing->tags=$request->tags ;
            $listing->listing_tags=$request->listing_tags ;
            $listing->phone=$request->phone ;
            $listing->city=$request->city ;
            $listing->address=$request->address ;
            $listing->latitude=$request->latitude ;
            $listing->longitude=$request->longitude ;
            $listing->name=$request->name ;
            $listing->email=$request->email;
            $listing->title=$request->title;
            $listing->tagline=$request->tagline;
            $listing->description=$request->description;
            $listing->amenities=$request->amenities;
            $listing->monday_open=$request->monday_open;
            $listing->monday_closed=$request->monday_closed;
            $listing->Tuesday_open=$request->Tuesday_open;
            $listing->Tuesday_closed=$request->Tuesday_closed;
            $listing->Wednesday_open=$request->Wednesday_open;
            $listing->Wednesday_closed=$request->Wednesday_closed;
            $listing->Thursday_open=$request->Thursday_open;
            $listing->Thursday_closed=$request->Thursday_closed;
            $listing->Friday_open=$request->Friday_open;
            $listing->Friday_closed=$request->Friday_closed;
            $listing->Saturday_open=$request->Saturday_open;
            $listing->Saturday_closed=$request->Saturday_closed;
            $listing->Sunday_open=$request->Sunday_open;
            $listing->Sunday_closed=$request->Sunday_closed;
            $listing->video=$request->video;
            $listing->price=$request->price;
            $listing->features=$request->features;


            $listing->save();




        return redirect()->route('listings.index')
            ->with('success','Listing created successfully.');
    }


    public function show(Listing $listing)
    {
        return view('listings.show',compact('listing'));
    }


    public function edit(Listing $listing)
    {

        return view('backend.listings.edit',compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Listing $listing, $id)
    {
        $listing = Listing::find($id);


        if($request->hasFile('cover')){
            $request->validate([
                'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('cover')->store('images');
            $listing->image = $path;
        }
        if($request->hasFile('logo')){
            $request->validate([
                'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('logo')->store('images');
            $listing->image = $path;
        }


        $path_logo = $request->file('logo')->store('images');
        $path_cover = $request->file('cover')->store('images');
        $path_gallery = $request->file('gallery')->store('images');
        $listing= new Listing;
        $listing->listing_title=$request->listing_title ;
        $listing->status=$request->listing_title ;
        $listing->keywords=$request->keywords ;
        $listing->category=$request->category ;
        $listing->cover=$path_logo ;
        $listing->logo=$path_cover ;
        $listing->gallery=$path_gallery ;
        $listing->tags=$request->tags ;
        $listing->listing_tags=$request->listing_tags ;
        $listing->phone=$request->phone ;
        $listing->city=$request->city ;
        $listing->address=$request->address ;
        $listing->latitude=$request->latitude ;
        $listing->longitude=$request->longitude ;
        $listing->name=$request->name ;
        $listing->email=$request->email;
        $listing->title=$request->title;
        $listing->tagline=$request->tagline;
        $listing->description=$request->description;
        $listing->amenities=$request->amenities;
        $listing->monday_open=$request->monday_open;
        $listing->monday_closed=$request->monday_closed;
        $listing->Tuesday_open=$request->Tuesday_open;
        $listing->Tuesday_closed=$request->Tuesday_closed;
        $listing->Wednesday_open=$request->Wednesday_open;
        $listing->Wednesday_closed=$request->Wednesday_closed;
        $listing->Thursday_open=$request->Thursday_open;
        $listing->Thursday_closed=$request->Thursday_closed;
        $listing->Friday_open=$request->Friday_open;
        $listing->Friday_closed=$request->Friday_closed;
        $listing->Saturday_open=$request->Saturday_open;
        $listing->Saturday_closed=$request->Saturday_closed;
        $listing->Sunday_open=$request->Sunday_open;
        $listing->Sunday_closed=$request->Sunday_closed;
        $listing->video=$request->video;
        $listing->price=$request->price;
        $listing->features=$request->features;

        $listing->save();


        return redirect()->route('backend.listings.index')
            ->with('success','Listing updated successfully');
    }


    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->route('backend.listings.index')
            ->with('success','Listing deleted successfully');
    }
}
