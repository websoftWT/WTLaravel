<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller
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
        $catagories = Catagory::orderBy('created_at','dosc')->get();
        return view ('layouts.News.add')->with('catagories',$catagories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'short-details' => 'required|min:10',
            'news-quotes'=>'required',
            'news-details'=>'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tag'=>'required',
            'page-description'=>'required|min:10'
        ]);
        News::create([
            'title' => $request->title,
            'catagory'=>$request->catagory,
            'short-details' => $request->short-details,
            'news-quotes'=>$request->news-quotes,
            'news-details'=>$request->news-details,
            'tag'=>$request->tag,
            'page-description'=>$request->page-description,
            'slug'=>str_slug($request->input('title'), '-')
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path(). '/',$image->getClientOriginalName());
        }

        return redirect(route('news.add'))->with('message','news added successfully');
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

    public function getAdd()
    {

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
