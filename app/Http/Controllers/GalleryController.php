<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('admin.gallery', compact('photos'));
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
            'caption' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $photo  = new Photo ;
        $photo->caption = $request->caption;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());;
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();
            $photo->image = $url;
            $photo->save();

            return redirect()->route('photos')
                ->with('success','Photo Added successfully');
        };

        return redirect()->route('photos');


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
        $caption = $request->get('caption');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path().'/uploads', $image->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $image->getClientOriginalName();

            DB::update("UPDATE photos set caption = ?, image = ? WHERE id = ?", [$caption, $url, $id]);
            return redirect('/photos')->with('success', 'Image Has Been Updated!');
        }else {
            DB::update("UPDATE photos set caption = ?, WHERE id = ?", [$caption, $id]);
            return redirect('/photos')->with('success', 'Image Has Been Updated!');
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
        $photo = Photo::find($id);
        $photo->delete();
        return redirect()->route('photos')
            ->with('success','Photo Deleted successfully');
    }
}
