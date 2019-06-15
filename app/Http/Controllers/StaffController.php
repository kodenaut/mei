<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

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
            'passport' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $staff  = new Staff() ;
        $staff->first_name = $request->fname;
        $staff->last_name = $request->sname;
        $staff->position = $request->position;

        if($request->hasFile('passport')){
            $passport = $request->file('passport');
            $passport->move(public_path().'/uploads', $passport->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $passport->getClientOriginalName();
            $staff->passport = $url;
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
        $salutation = $request->get('salutation');
        $first_name = $request->get('fname');
        $last_name = $request->get('sname');
        $position = $request->get('position');

        if ($request->hasFile('passport')) {
            $passport = $request->file('passport');
            $passport->move(public_path().'/uploads', $passport->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $passport->getClientOriginalName();

            DB::update("UPDATE staff set salutation = ?, first_name = ?, last_name = ?,
                            position = ?, passport = ? WHERE id = ?", [$salutation, $first_name, $last_name, $position, $url, $id]);
            return redirect('/staffs')->with('success', 'Staff Has Been Updated!');
        }else {
            DB::update("UPDATE staff set salutation = ?, first_name = ?, last_name = ?, position = ?, WHERE id = ?", [$salutation, $first_name, $last_name, $position, $id]);
            return redirect('/staffs')->with('success', 'Staff Has Been Updated!');
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
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('/staffs')->with('success', 'Staff Has Been Deleted!');
    }
}
