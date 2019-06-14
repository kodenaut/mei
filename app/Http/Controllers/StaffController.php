<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs = Staff::all();
        return view('admin.staffs', compact('staffs'));
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
            'salutation' => 'required',
            'fname' => 'required',
            'sname' => 'required',
            'position' => 'required',
            'bio' => 'required',
            'passport' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $staff  = new Staff() ;
        $staff->first_name = $request->fname;
        $staff->last_name = $request->sname;
        $staff->position = $request->position;
        $staff->bio = $request->bio;

        if($request->hasFile('passport')){
            $passport = $request->file('passport');
            $filename = time() . '.' . $passport->getClientOriginalExtension();
            $passport->move(public_path('/uploads/' . $filename ));
            $staff->passport = $filename;
            $staff->save();

            return redirect()->route('staffs')
                ->with('success','Staff Added successfully');
        };

        return redirect()->route('staffs');
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
