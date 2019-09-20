<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Overview;

class OverviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $overviews = Overview::all();
        return view('admin.overview', compact('overviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add-overview');
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
            'name'=> 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $overview  = new Overview();
        $overview->title = $request->get('title');
        $overview->name = $request->get('name');
        $overview->content = $request->get('content');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();
            $overview->image = $url;
            $overview->save();

            return redirect()->route('overview')
                ->with('success','Overview Added successfully');
        };
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
        $overview = Overview::find($id);
        return view('admin.edit-overview', compact('overview'));
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
        $name = $request->get('name');
        $content = $request->get('content');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();

            DB::update("UPDATE greetings set title = ?, name = ?, content = ?, image = ? WHERE id = ?", [$title, $name, $content, $url, $id]);
            return redirect('/overview')->with('success', 'Overview Has Been Updated!');
        }else {
            DB::update("UPDATE greetings set title = ?, $name, content = ? WHERE id = ?", [$title, $name, $content, $id]);
            return redirect('/overview')->with('success', 'Overview Has Been Updated!');
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
        $overview = Overview::find($id);
        $overview->delete();
        return redirect('/overview')->with('success', 'Overview Has Been Deleted!');
    }
    public function greetings(){
        $greetings = Overview::all();
        return view('mahanaim.greetings', compact('greetings'));
    }
}
