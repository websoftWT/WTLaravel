<?php

namespace App\Http\Controllers;

use App\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('layouts.catagory.add');;
    }

    public function manage()
    {
        $catagories = Catagory::orderBy('created_at','dosc')->get();
        return view ('layouts.catagory.manage')->with('catagories',$catagories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category= new Catagory();

        $this->validate($request, [
            'title' => 'required|min:3',
            'details' => 'required|min:10'
        ]);
        Catagory::create([
            'title' => $request->title,
            'details' => $request->details,
            'slug'=>str_slug($request->input('title'), '-')
        ]);
        return redirect(route('catagory.add'))->with('message','catagory added successfully');
    }

    public function removeCategory(Request $request) {
        $catagory = Catagory::findOrFail($request->id);
        $catagory->delete();
    }

    public function editCategory(Request $request) {
        $catagory = Catagory::findOrFail($request->id);
        $catagory->title = $request->title;
        $catagory->update();
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
