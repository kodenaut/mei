<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slides = Slider::all();
        return view('admin.slides', compact('slides'));
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
            'tagline' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $slide  = new Slider() ;
        $slide->title = $request->title;
        $slide->tagline = $request->tagline;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();
            $slide->image = $url;
            $slide->save();

            return redirect()->route('slides')
                ->with('success','Image Added successfully');
        };

        return redirect()->route('slides');
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
        $tagline = $request->get('tagline');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();

            DB::update("UPDATE sliders set title = ?, tagline = ?, image = ? WHERE id = ?", [$title, $tagline, $url, $id]);
            return redirect('/slides')->with('success', 'Image Has Been Updated!');
        }else {
            DB::update("UPDATE sliders set title = ?, tagline = ? WHERE id = ?", [$title, $tagline, $id]);
            return redirect('/slides')->with('success', 'Image Has Been Updated!');
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
        $slide =  Slider::find($id);
        $slide->delete();
        return redirect('/slides')->with('success', 'Image Has Been Deleted!');
    }
}
