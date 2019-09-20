<?php

namespace App\Http\Controllers;

use App\Greeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class GreetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $greetings = Greeting::all();
        return view('admin.greetings', compact('greetings'));
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
            'name'=> 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $overview  = new Greeting();
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
                ->with('success','Message Added successfully');
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
        $overview = Greeting::find($id);
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
            return redirect('/mei-greetings')->with('success', 'Message Has Been Updated!');
        }else {
            DB::update("UPDATE greetings set title = ?, name = ?, content = ? WHERE id = ?", [$title, $name, $content, $id]);
            return redirect('/mei-greetings')->with('success', 'Message Has Been Updated!');
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
    }

    public function greetings(){
        $greetings = Greeting::all();
        return view('mahanaim.greetings', compact('greetings'));
    }
}
