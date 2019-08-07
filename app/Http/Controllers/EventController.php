<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        return view('admin.events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add-event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, array(
            'title' => 'required',
            'venue' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $event  = new Event() ;
        $event->title = $request->get('title');
        $event->venue = $request->get('venue');
        $event->description = $request->get('description');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();
            $event->image = $url;
            $event->save();

            return redirect()->route('events')
                ->with('success','Event Added successfully');
        };

        return redirect()->route('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $event = Event::find($id);
        return view('admin.edit-event', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $title = $request->get('title');
        $venue = $request->get('venue');
        $description = $request->get('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();

            DB::update("UPDATE events set title = ?, venue = ?, description = ?, image = ? WHERE id = ?", [$title, $venue, $description, $url, $id]);
            return redirect('/events')->with('success', 'Event Has Been Updated!');
        }else {
            DB::update("UPDATE events set title = ?, venue = ?, description = ? WHERE id = ?", [$title, $venue, $description, $id]);
            return redirect('/events')->with('success', 'Event Has Been Updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $event = Event::find($id);
        $event->delete();
        return redirect('/events')->with('success', 'Event Has Been Deleted!');
    }

    public function events(){
        $events = Event::all();
        return view('mahanaim.events', compact('events'));
    }
}
