<?php

namespace App\Http\Controllers;

use App\Notice;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = DB::table('students')
            ->distinct()
        ->paginate(10);
        return view('admin.students', compact('students'));
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
            'email' => 'required',
            'school' => 'required',
            'phone' => 'required',
        ));
        //save the data to the database
        $student  = new Student() ;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->school = $request->school;
        $student->phone = $request->phone;

        $students = Student::all();
        foreach ($students as $std){
            if ($request->phone == $std->phone ){
                $subjects = Subject::all();
                $notices = Notice::all();
                return view('mahanaim.past-papers', compact('subjects', 'notices'))
                    ->with('success', 'User Already Exists!');
            }


        }

        $student->save();

        $subjects = Subject::all();
        $notices = Notice::all();
        return view('mahanaim.past-papers', compact('subjects', 'notices'))
            ->with('success', 'Account Created Successfully!');
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
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('kcse-students')
            ->with('success','Record Has Been Deleted');
    }
}
