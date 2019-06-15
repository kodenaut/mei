<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partners = Partner::all();
        return view('admin.partners', compact('partners'));
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
            'country' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        //save the data to the database
        $partner  = new Partner() ;
        $partner->name = $request->name;
        $partner->country = $request->country;

        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('/uploads/' . $filename ));
            $partner->logo = $filename;
            $partner->save();

            return redirect()->route('partners')
                ->with('success','Partner Added successfully');
        };
        return redirect()->route('partners');
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
        $name = $request->get('name');
        $country = $request->get('country');
        $link = $request->get('link');

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('/uploads/' . $filename));

            DB::update("UPDATE partners set name = ?, country = ?, link = ? logo = ? WHERE id = ?", [$name, $country, $link, $filename, $id]);
            return redirect('/partners')->with('success', 'Partner Has Been Updated!');
        }else {
            DB::update("UPDATE partners set name = ?, country = ?, link = ? WHERE id = ?", [$name, $country, $link, $id]);
            return redirect('/partners')->with('success', 'Partner Has Been Updated!');
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
}
