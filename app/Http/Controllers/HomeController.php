<?php

namespace App\Http\Controllers;

use App\Event;
use App\Mission;
use App\Partner;
use App\Philosophy;
use App\Photo;
use App\Post;
use App\School;
use App\Staff;
use App\Vision;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visions = Vision::all();
        $missions = Mission::all();
        $philosophies = Philosophy::all();
        $staffs = Staff::all();
        $schools = School::all();
        $posts = Post::all();
        $events = Event::all();
        $photos = Photo::all();
        $partners = Partner::all();
        return view('mahanaim.index', compact('missions', 'philosophies', 'visions',
            'schools', 'staffs', 'posts', 'photos', 'events', 'partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
