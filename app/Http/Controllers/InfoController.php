<?php

namespace App\Http\Controllers;

use App\Info;
use App\Notice;
use App\Overview;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $infos = Info::all();
        return view('admin.info', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add-info');
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
            'content' => 'required',
        ));
        //save the data to the database
        $info  = new Info();
        $info->title = $request->get('title');
        $info->content = $request->get('content');


        $info->save();

            return redirect()->route('info')
                ->with('success','Information Added successfully');
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
        $info = Info::find($id);
        return view('admin.edit-info', compact('info'));
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
        $content = $request->get('content');


            DB::update("UPDATE statements set title = ?, content = ? WHERE id = ?", [$title, $content, $id]);
            return redirect('/info')->with('success', 'Info Has Been Updated!');

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
        $info = Info::find($id);
        $info->delete();
        return redirect('/info')->with('success', 'Info Has Been Deleted!');

    }
    public function meiinfo(){

        return view('mahanaim.mei-info', compact('infos', 'posts', 'notices'));
    }
}
