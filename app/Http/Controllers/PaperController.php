<?php

namespace App\Http\Controllers;

use App\Course;
use App\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $course = Course::find($id);
        $papers = DB::select("SELECT * FROM papers WHERE course_id = $id");
        return view('admin.papers', compact('papers', 'course'));
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
        //
        $title = $request->input('title');


        if($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(public_path() . '/uploads', $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads' . '/' . $file->getClientOriginalName();

            DB::table('papers')->insert([[
                'title'=>$title,
                'file'=>$url,
                'course_id'=>$id,
            ]]);
            $course = Course::find($id);
            $papers = DB::select("SELECT * FROM papers WHERE course_id = $id");
            return view('admin.papers', compact('papers', 'course'));
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
        $title = $request->get('title');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(public_path() . '/uploads', $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads' . '/' . $file->getClientOriginalName();

            DB::update("UPDATE papers set title = ?, file = ? WHERE id = ?",
                [$title, $url, $id]);
            return redirect('/schools')->with('success', 'Paper Has Been Updated!');
        } else {
            DB::update("UPDATE papers set title = ? WHERE id = ?", [$title, $id]);
            return redirect('/schools')->with('success', 'Paper Has Been Updated!');
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
        $paper = Paper::find($id);
        $paper->delete();

        return redirect()->route('schools')
            ->with('success','Paper Deleted successfully');

    }
    public function coursepapers($id){
        $courses = Course::paginate(8);
        $papers = DB::select("SELECT * FROM papers WHERE course_id = $id");
        return view('mahanaim.papers', compact('courses', 'papers'));
    }

    public function papers(){
        $courses = Course::paginate(8);
        $papers = Paper::paginate(8);
        return view('mahanaim.papers', compact('courses', 'papers'));
    }


}
