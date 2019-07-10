<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\URL;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notices = Notice::all();
        return view('admin.notice-board', compact('notices'));
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
            'content'=>'required',
            'file' => 'image|mimes:pdf,jpg,png,svg,gif|max:4096',
        ));
        //save the data to the database
        $notice  = new Notice() ;
        $notice->title = $request->get('title');
        $notice->content = $request->get('content');

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(public_path() . '/uploads', $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads' . '/' . $file->getClientOriginalName();
            $notice->file = $url;

            $notice->save();
            return redirect()->route('notices')
                ->with('success','Notice Added successfully');
        }else{
        $notice->save();
        return redirect()->route('notices')
            ->with('success', 'Notice Added successfully');
    }
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
        $notice = Notice::find($id);
        $posts = Post::all();
        return view('mahanaim.notice-board', compact('notice', 'posts'));
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

    public function notices(){
        $notices = Notice::all();
        return view('mahanaim.notice-board', compact('notices'));
    }

}
