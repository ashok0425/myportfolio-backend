<?php

namespace Laravel\Fortify\Http\Responses;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        if(Auth::user()->Isvendor==1){
         if(Auth::user()->status==1){
            return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route('vendor.dashboard');
         }else{
             Auth::logout();
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Your account has been blocked. Please contact the administrator.',
               
             );
             return redirect()->route('/')->with($notification);
         }
        }else{
        
            return $request->wantsJson()
            ? new JsonResponse('', 201)
            : redirect()->intended(session()->get('url'));
        }
    }
}
