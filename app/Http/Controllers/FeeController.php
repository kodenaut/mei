<?php

namespace App\Http\Controllers;

use App\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $fees = Fee::all();
        return view('admin.fees', compact('fees'));
    }
    public function engineering()
    {
        //
        $fees = DB::select("SELECT * FROM fees WHERE title='SOE'");
        return view('mahanaim.fee-structure', compact('fees'));
    }

    public function engineeringfee()
    {
        //
        $fees = DB::select("SELECT * FROM fees WHERE title='SOE'");
        return view('admin.fees', compact('fees'));
    }
    public function languages(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOL'");
        return view('admin.fees', compact('fees'));
    }

    public function languagesfee(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOL'");
        return view('mahanaim.fee-structure', compact('fees'));
    }

    public function ict(){
        $fees = DB::select("SELECT * FROM fees WHERE title='ICT'");
        return view('admin.fees', compact('fees'));
    }

    public function ictfee(){
        $fees = DB::select("SELECT * FROM fees WHERE title='ICT'");
        return view('mahanaim.fee-structure', compact('fees'));
    }
    public function hospitality(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOH'");
        return view('admin.fees', compact('fees'));
    }

    public function hospitalityfee(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOH'");
        return view('mahanaim.fee-structure', compact('fees'));
    }

    public function journalism(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOJ'");
        return view('admin.fees', compact('fees'));
    }

    public function journalismfee(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOJ'");
        return view('mahanaim.fee-structure', compact('fees'));
    }

    public function sports(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOM'");
        return view('admin.fees', compact('fees'));
    }

    public function sportsfee(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOM'");
        return view('mahanaim.fee-structure', compact('fees'));
    }

    public function business(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOB'");
        return view('admin.fees', compact('fees'));
    }

    public function businessfee(){
        $fees = DB::select("SELECT * FROM fees WHERE title='SOB'");
        return view('mahanaim.fee-structure', compact('fees'));
    }

    public function icdl(){
        $fees = DB::select("SELECT * FROM fees WHERE title='ICDL'");
        return view('admin.fees', compact('fees'));
    }

    public function icdlfee(){
        $fees = DB::select("SELECT * FROM fees WHERE title='ICDL'");
        return view('mahanaim.fee-structure', compact('fees'));
    }

    public function catering(){
        $fees = DB::select("SELECT * FROM fees WHERE title='CAT'");
        return view('admin.fees', compact('fees'));
    }

    public function cateringfee(){
        $fees = DB::select("SELECT * FROM fees WHERE title='CAT'");
        return view('mahanaim.fee-structure', compact('fees'));
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
            'structure' => 'file|mimes:pdf|max:4096',
        ));
        //save the data to the database
        $fee  = new Fee() ;
        $fee->title = $request->get('title');

        if($request->hasFile('structure')){
            $structure = $request->file('structure');
            $structure->move(public_path().'/uploads', $structure->getClientOriginalName());
            $url=URL::to("/") . '/uploads'.'/'. $structure->getClientOriginalName();
            $fee->structure = $url;
            $fee->save();

            return redirect()->route('fees')
                ->with('success','Fee Added successfully');
        };
        return redirect()->route('fees')
            ->with('success','Fee Added successfully');
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

        if ($request->hasFile('structure')) {
            $structure = $request->file('structure');
            $structure->move(public_path() . '/uploads', $structure->getClientOriginalName());
            $url = URL::to("/") . '/uploads' . '/' . $structure->getClientOriginalName();

            DB::update("UPDATE fees set structure = ? WHERE id = ?", [$url, $id]);
            return redirect('/engineering')->with('success', 'Fee Has Been Updated!');
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
        $fee = Fee::find($id);
        $fee->delete();
        return redirect()->route('fees')
            ->with('success','Fee Deleted successfully');
    }

    public function fees(){
        $fees = Fee::all();
        return view('mahanaim.fee-structure', compact('fees'));
    }
}
