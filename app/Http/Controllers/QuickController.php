<?php

namespace App\Http\Controllers;

use App\Term;
use App\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class QuickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $terms = Term::all();
        return view('admin.terms', compact('terms'));
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
        $this->validate($request, array(
            'title' => 'required',
            'file' => 'file|mimes:pdf,jpg,png,svg,gif,xlsx|max:4096',
        ));
        //save the data to the database
        $term = new Term();
        $term->title = $request->get('title');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(public_path() . '/uploads', $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads' . '/' . $file->getClientOriginalName();
            $term->file = $url;

            $term->save();
            return redirect()->route('our-schedule')
                ->with('success', 'Schedule Added successfully');
        } else {
            $term->save();
            return redirect()->route('our-schedule')
                ->with('success', 'Schedule Added successfully');
        }
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

    public function termdates(){
        $terms = Term::all();
        return view('mahanaim.term-dates', compact('terms'));

    }

    public function timetable(){
        $timetables = Timetable::all();
        return view('mahanaim.timetable', compact('timetables'));
    }

    public function ourtimetable(){
        $tables = Timetable::all();
        return view('admin.timetable', compact('tables'));
    }

    public function savetable(Request $request){
        $this->validate($request, array(
            'title' => 'required',
            'file' => 'file|mimes:pdf,jpg,png,svg,gif|max:4096',
        ));
        //save the data to the database
        $table = new Timetable();
        $table->title = $request->get('title');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(public_path() . '/uploads', $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads' . '/' . $file->getClientOriginalName();
            $table->file = $url;

            $table->save();
            return redirect()->route('our-timetable')
                ->with('success', 'Timetable Added successfully');
        } else {
            $table->save();
            return redirect()->route('our-timetable')
                ->with('success', 'Timetable Added successfully');
        }
    }
}
