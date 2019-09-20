<?php

namespace App\Http\Controllers;

use App\PastPaper;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PastPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subjects = Subject::all();
        return view('admin.kcse-papers', compact('subjects'));
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
            'year' => 'required',
            'qpaper' => 'file|mimes:pdf|max:2048',
            'apaper' => 'file|mimes:pdf|max:2048',
        ));
        //save the data to the database
        $title = $request->input('title');
        $year = $request->input('year');
        $q_paper = $request->input('qpaper');
        $a_paper = $request->input('apaper');

        if ($request->hasFile('file')) {
            $file = $request->file('image');
            $file->move(public_path() . '/uploads', $file->getClientOriginalName());;
            $url = URL::to("/") . '/uploads' . '/' . $file->getClientOriginalName();
            $paper->image = $url;

            DB::table('courses')->insert([[


            ]]);

            return redirect()->route('kcse-papers')
                ->with('success','Paper Added successfully!');
        }else{
            $paper->save();
            return redirect()->route('kcse-papers')
                ->with('success','Paper Added Successfully!');
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

    public function subject_papers($id){
        $subject = Subject::find($id);
        $papers = DB::select("SELECT * FROM past_papers WHERE subject_id = $id");
        return view('admin.subject_papers', compact('papers', 'subject'));
    }
}
