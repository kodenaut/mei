<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = DB::table("staff")->count();
        $schools = DB::table("schools")->count();
        $courses = DB::table("courses")->count();
        $messages = DB::table("messages")->count();
        $posts = DB::table("posts")->count();
        $events = DB::table("events")->count();
        $photos = DB::table("photos")->count();
        $partners = DB::table("partners")->count();
        $notices = DB::table("notices")->count();
        $papers = DB::table("past_papers")->count();
        $students =  DB::table("students")->count();
        $greetings = DB::table("greetings")->count();
        $terms = DB::table("terms")->count();
        $tables = DB::table("timetables")->count();
        $fees = DB::table("fees")->count();
        $tags = DB::table("tags")->count();
        $statements = DB::table("statements")->count();

        $details = array("$staffs", "$schools", "$courses", "$messages", "$posts", "$events", "$photos", "$partners", "$notices", "$papers", "$students",
            "$greetings", "$terms", "$tables", "$fees", "$tags", "$statements");
        return view('admin.dashboard', compact('details'));
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

    public function logout(){
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('login');
    }

}
