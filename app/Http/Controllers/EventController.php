<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::latest()->paginate(5);

        return view('backend.events.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'adresse' => 'required',
            'telephone'=> 'required',
            'description'=> 'required',
            'email'=> 'required',
            'website'=> 'required',
            'city'=> 'required',

            'startdate'=> 'required',
            'enddate'=> 'required',
            'facebook'=> 'required',
            'twitter'=> 'required',
            'instagram'=> 'required',
            'youtube'=> 'required',
            'cover'=> 'required',
            'tags'=> 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = 'images';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }
        $event = Event::create($input);

        $event_id = $event->id;

        if($request->hasfile('images')) {
            $files = $request->file('images');

            foreach($files as $file) {

                $path = 'images';
                $name = time() . "." . $file->getClientOriginalExtension();
                $file->move($path, $name);

                Image::create([
                    'name' => $name,
                    'path' => $path,
                    'event_id'=>$event_id ,
                ]);
            }
        }

        return view('backend.events.index')
            ->with('success','Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('backend.events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('backend.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'adresse' => 'required',
            'telephone'=> 'required',
            'description'=> 'required',
            'email'=> 'required',
            'website'=> 'required',
            'city'=> 'required',
            'startdate'=> 'required',
            'enddate'=> 'required',
            'facebook'=> 'required',
            'twitter'=> 'required',
            'instagram'=> 'required',
            'youtube'=> 'required',
            'cover'=> 'required',
            'tags'=> 'required',
            'longitude'=>'required',
            'latitude'=>'required',
            'logo'=>'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = Event::getCoverPath();
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }else{
            unset($input['cover']);
        }


        $event->update($input);


        $event_id = $event->id;

        if($request->hasfile('images')) {
            $files = $request->file('images');

            foreach($files as $file) {

                $path = 'images/';
                $name = time() . "." . $file->getClientOriginalExtension();
                $file->move($path, $name);

                Image::create([
                    'name' => $name,
                    'path' => '/images',
                    'Event_id'=>$event_id ,
                ]);
            }
        }


        return redirect()->view('backend.events.index')
            ->with('success','Event updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->view('backend.events.index')
            ->with('success','Event deleted successfully');
    }
}
