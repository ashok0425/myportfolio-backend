<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use File;
class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills=Skill::orderBy('id','desc')->get();
        return view('admin.skill.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill=new Skill;
        $skill->skill=$request->skill;
        $skill->percent=$request->percent;
      
    
        $skill->save();
        $notification=[
    'messege'=>'Added',
    'alert-type'=>'success'
        ];
    return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit',compact('skill'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {

        $skills=Skill::find($skill->id);
        $skills->skill=$request->skill;
        $skills->percent=$request->percent;
      
               $skills->save();
        $notification=[
    'messege'=>'updated',
    'alert-type'=>'success'
        ];
    return redirect()->route('skills.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        $notification=[
            'messege'=>'deleted',
            'alert-type'=>'success'
                ];
            return redirect()->route('skills.index')->with($notification);
    }
}
