<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
    public function store(Request $request, $id)
    {

        $name = $request->input('name');
        $qualification = $request->input('qualification');
        $duration = $request->input('duration');
        $modules = $request->input('modules');
        $exam = $request->input('exam');
        $mode = $request->input('mode');
        //
        DB::table('courses')->insert([[
            'name'=>$name,
            'qualification'=>$qualification,
            'duration'=>$duration,
            'modules'=>$modules,
            'exam_body'=>$exam,
            'mode'=>$mode,
            'school_id'=>$id,

        ]]);
        return redirect()->route('schools')
            ->with('success','Course Added successfully');

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
        $name = $request->get('name');
        $qualification = $request->get('qualification');
        $duration = $request->get('duration');
        $modules = $request->get('modules');
        $exam = $request->get('exam');
        $mode = $request->get('mode');

            DB::update("UPDATE courses set name = ?, qualification = ?, duration = ?, modules = ?, exam_body = ?, mode = ? WHERE id = ?",
                [$name, $qualification, $duration, $modules, $exam, $mode, $id]);
            return redirect('/schools')->with('success', 'Course Has Been Updated!');

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
        $course = Course::find($id);
        $course->delete();
        return redirect('/schools')->with('success', 'Course Has Been Deleted!');
    }

    public function courses($id){
        $school = School::find($id);
        $courses = DB::select("SELECT * FROM courses WHERE school_id = $id");
        return view('mahanaim.our-courses', compact('courses', 'school'));

    }
}
