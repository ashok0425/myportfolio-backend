<?php
namespace App\Http\Controllers\Api;

use App\Models\Info;
use App\Http\Traits\ResponseApi;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Request;
class InfoController extends Controller
{
use ResponseApi;
    public function index(){
        $info=Info::find(1);
 return $this->success($info,'Data Fetch',200);
    }


    public function portfolio(){
        $portfolios=Portfolio::orderBy('id','desc')->get();
        return $this->success($portfolios,'Data Fetch',200);
    }


    public function skill(){
        $skills=Skill::orderBy('id','desc')->get();
        return   $this->success($skills,'Data Fetch',200);
    }

public function contact(Request $request){
    $contact=new Contact;
    $contact->name=$request->name;
    $contact->email=$request->email;
    $contact->phone=$request->phone;
    $contact->subject=$request->subject;
    $contact->message=$request->message;

   if($contact->save()){
        return   $this->success($contact,'Your query has been placed.we will get back to you as soon as possible.',200);
         
   }else{
    return   $this->error('Failed to placed query','Failed to placed query.Try again later.',400);

   }
   
}
}