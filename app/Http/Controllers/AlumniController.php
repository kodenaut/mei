<?php

namespace App\Http\Controllers;

use App\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnis = Alumni::all();
        return view('admin.alumnis', compact('alumnis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add-alumnus');
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
            'fname' =>'required',
            'lname' =>'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $alumnus  = new Alumni() ;
        $alumnus->firstname = $request->get('fname');
        $alumnus->lastname = $request->get('lname');
        $alumnus->title = $request->get('title');
        $alumnus->content = $request->get('content');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();
            $alumnus->image = $url;
            $alumnus->save();

            return redirect()->route('alumnis')
                ->with('success','Alumni Added successfully');
        };

        return redirect()->route('alumnis');
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
        $alumnus = Alumni::find($id);
        return view('admin.edit-alumnus', compact('alumnus'));
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
        $fname = $request->get('fname');
        $lname = $request->get('lname');
        $title = $request->get('title');
        $content = $request->get('content');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();

            DB::update("UPDATE alumnis set firstname = ?, lastname = ?, title = ?, content = ?, image = ? WHERE id = ?", [$fname, $lname, $title, $content, $url, $id]);
            return redirect('/alumnis')->with('success', 'Alumni Has Been Updated!');
        }else {
            DB::update("UPDATE alumnis set firstname = ?, lastname = ?, title = ?, content = ? WHERE id = ?", [$fname, $lname, $title, $content, $id]);
            return redirect('/alumnis')->with('success', 'Alumni Has Been Updated!');
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
        $alumnus = Alumni::find($id);
        $alumnus->delete();
        return redirect('/alumnis')->with('success', 'Alumni Has Been Deleted!');
    }

    public function alumnis(){
        $alumnis = Alumni::paginate(6);
        return view('mahanaim.our-alumni', compact('alumnis'));
    }
}
