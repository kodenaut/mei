<?php
namespace App\Http\Controllers;
use App\Event;
use App\Info;
use App\Mission;
use App\Notice;
use App\Overview;
use App\Partner;
use App\Philosophy;
use App\Photo;
use App\Post;
use App\Staff;
use App\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visions = Vision::all();
        $missions = Mission::all();
        $philosophies = Philosophy::all();
        $staffs = Staff::all();
        $photos = Photo::all();
        $partners = Partner::all();
        $events = Event::all();
        $overviews = Overview::all();
        $infos = Info::all();
        $notices = DB::table('notices')
            ->latest()
            ->limit(5)
            ->get();
        $posts = DB::table('posts')
            ->latest()
            ->limit(4)
            ->get();

        $olds = DB::table('posts')
            ->skip(4)
            ->take(4)
            ->get();
        $news = DB::table('posts')
            ->latest()
            ->limit(2)
            ->get();
        $wms = DB::table('posts')
            ->latest()
            ->limit(1)
            ->get();
        return view('mahanaim.index', compact('missions', 'philosophies', 'visions',
            'staffs', 'posts', 'photos', 'events', 'partners', 'overviews', 'infos', 'notices', 'posts', 'olds',
            'news', 'wms'));
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

}
