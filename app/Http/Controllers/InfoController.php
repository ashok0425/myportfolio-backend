<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use File;
class InfoController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Info::find(1);
       return view('admin.info.index',compact('info'));
    }


    public function store(Request $request)
    {
        $info=Info::find(1);
        $info->name=$request->name;
        $info->email=$request->email;
        $info->phone=$request->phone;
        $info->facebook=$request->facebook;
        $info->github=$request->github;
        $info->twitter=$request->twitter;
        $info->instagram=$request->instagram;
        $info->linkdein=$request->linkdein;
        $info->skype=$request->skype;
        $info->nationality=$request->nationality;
        $info->experience=$request->experience;
        $info->project=$request->project;
        $info->customer=$request->customer;
        $info->address=$request->address;
        $info->age=$request->age;
        $info->about=$request->about;
        $info->designation=$request->designation;


    $file=$request->file('cv');
    if($file){
        File::delete(public_path($info->cv));
        $fname='ashokmehtaresume.'.rand().$file->getClientOriginalExtension();
        $info->cv='upload/'.$fname;
        $path=$file->move(public_path().'/upload/',$fname);
 
    }

    $file=$request->file('image');

    if($file){
        File::delete(public_path($info->image));
        $fname='ahokmehta.'.rand().$file->getClientOriginalExtension();
        $info->image='upload/'.$fname;
        $path=$file->move(public_path().'/upload/',$fname);

    }





    $file=$request->file('mobile_image');

    if($file){
        File::delete(public_path($info->mobile_image));
        $fname='mobile_image.'.rand().$file->getClientOriginalExtension();
        $info->mobile_image='upload/'.$fname;
        $path=$file->move(public_path().'/upload/',$fname);

    }

    $info->save();
    $notification=[
'messege'=>'updated',
'alert-type'=>'success'
    ];
return redirect()->back()->with($notification);
    }
    
}
