<?php

namespace App\Http\Controllers;

use App\School;
use App\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schools = DB::table('schools')
        ->paginate(6);
        return view('admin.schools', compact('schools'));
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $school  = new School() ;
        $school->name = $request->name;
        $school->description = $request->description;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();
            $school->image = $url;
            $school->save();

            return redirect()->route('schools')
                ->with('success','School Added successfully');
        };

        return redirect()->route('schools');

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
        $school = School::find($id);
        $courses = DB::select("SELECT * FROM courses WHERE school_id = $id");
        return view('admin.courses', compact('courses', 'school'));
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
        $name = $request->get('name');
        $description = $request->get('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();

            DB::update("UPDATE schools set name = ?, description = ?, image = ? WHERE id = ?", [$name, $description, $url, $id]);
            return redirect('/schools')->with('success', 'School Has Been Updated!');
        }else {
            DB::update("UPDATE schools set name = ?, description = ? WHERE id = ?", [$name, $description, $id]);
            return redirect('/schools')->with('success', 'School Has Been Updated!');
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
        $school = School::find($id);
        $school->delete();
        return redirect('/schools')->with('success', 'School Has Been Deleted!');
    }

    public function schools(){
        $schools = School::all();
        return view('mahanaim.our-schools', compact('schools'));
    }
}
