<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use File;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios=Portfolio::orderBy('id','desc')->get();
        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio=new Portfolio;
        $portfolio->name=$request->name;
        $portfolio->type=$request->type;
        $portfolio->link=$request->link;
        $portfolio->client=$request->client;
        $portfolio->program=$request->program;
        $file=$request->file('file');
        if($file){
            // File::delete(public_path($portfolio->other));
            $fname=$request->name.rand(1,10000).$file->getClientOriginalExtension();
            $portfolio->other='upload/port/'.$fname;
            $path=$file->move(public_path().'/upload/port/',$fname);
     
        }
    
        $portfolio->save();
        $notification=[
    'messege'=>'Added',
    'alert-type'=>'success'
        ];
    return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit',compact('portfolio'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {

        $portfolios=Portfolio::find($portfolio->id);
        $portfolios->name=$request->name;
        $portfolios->type=$request->type;
        $portfolios->link=$request->link;
        $portfolios->client=$request->client;
        $portfolios->program=$request->program;
        $file=$request->file('file');
        if($file){
            File::delete(public_path($portfolio->other));
            $fname=$request->name.rand(1,10000).$file->getClientOriginalExtension();
            $portfolios->other='upload/port/'.$fname;
            $path=$file->move(public_path().'/upload/port/',$fname);
     
        }
    
        $portfolios->save();
        $notification=[
    'messege'=>'updated',
    'alert-type'=>'success'
        ];
    return redirect()->route('portfolios.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        $notification=[
            'messege'=>'deleted',
            'alert-type'=>'success'
                ];
            return redirect()->route('portfolios.index')->with($notification);
    }
}
