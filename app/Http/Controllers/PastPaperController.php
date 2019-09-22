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
    public function store(Request $request, $id)
    {
        //
        $title = $request->input('title');
        $year = $request->input('year');


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(public_path() . '/uploads', $file->getClientOriginalName());;
            $url = URL::to("/") . '/uploads' . '/' . $file->getClientOriginalName();
        //
        DB::table('past_papers')->insert([[
            'title'=>$title,
            'year'=>$year,
            'file'=>$url,
            'subject_id'=>$id,

        ]]);


            return redirect()->route('kcse-papers')
                ->with('success','Paper Added successfully!');
        }else{
            return redirect()->route('kcse-papers')
                ->with('success','Failed!');
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
        $year = $request->get('year');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(public_path().'/uploads', $file->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $file->getClientOriginalName();

            DB::update("UPDATE past_papers set title = ?, year = ?, file = ? WHERE id = ?", [$title, $year, $url, $id]);
            return redirect('/kcse-papers')->with('success', 'Paper Has Been Updated!');
        }else {
            DB::update("UPDATE past_papers set title = ?, year = ? WHERE id = ?", [$title, $year, $id]);
            return redirect('/kcse-papers')->with('success', 'Paper Has Been Updated!');
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
        $paper = PastPaper::find($id);
        $paper->delete();
        return redirect()->route('kcse-papers')
            ->with('success','Paper Deleted successfully!');

    }

    public function subject_papers($id){
        $subject = Subject::find($id);
        $papers = DB::select("SELECT * FROM past_papers WHERE subject_id = $id");
        return view('admin.subject_papers', compact('papers', 'subject'));
    }

    public function papers($id){
        $subject = Subject::find($id);
        $papers = DB::select("SELECT * FROM past_papers WHERE subject_id = $id");
        return view('mahanaim.papers', compact('papers', 'subject'));
    }
}
