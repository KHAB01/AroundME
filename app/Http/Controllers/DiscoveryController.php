<?php

namespace App\Http\Controllers;

use App\Models\Discovery;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiscoveryController extends Controller
{
    public function index()
    {
        $latest = Discovery::latest()->take(3)->get();
        $discoveries= DB::table('users')->join('discoveries','users.id','=',"discoveries.user_id")->paginate(5);

        return view('frontend.discoveries.index', compact('discoveries','latest'));
    }

    public function create()
    {
        return view('frontend.discoveries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'tagline' => 'required',
            'category' => 'required',
            'city' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = 'images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }


        Discovery::create($input);

        return redirect('discoveries')->with('success','Post ajouté!');
    }
    public function show(Discovery $discovery)
    {
        $user=$discovery->user_id;
        $users=DB::table('users')->join('discoveries','users.id','=',"discoveries.user_id")->where('users.id','=',$user)->get();
        $category=$discovery->category;
        $latest = Discovery::latest()->take(3)->get();
        $related = DB::table('discoveries')->where('category','=',$category)->get();
        return view('frontend.discoveries.show', compact('discovery','latest','related','users'));
    }


/*    public function edit(Discovery $discovery)
    {
        return view('backend.discovery.edit_post', compact('discovery'));
    }

    public function update(Discovery $discovery, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'author' => 'required',
            'listing_title' => 'required',
            'keywords' => 'required',
            'category' => 'required',
            'city' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'tags' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = 'uploads/blog/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['cover']);
        }

        $discovery->update($input);

        return redirect()->route('discovery.index')
            ->with('success', 'Discovery updated successfully');
    }*/

    public function destroy(Discovery $discovery)
    {
        $discovery->delete();

        return back()
            ->with('success', 'Discovery deleted successfully');
    }
}
