<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/chapters/prologue';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo() {
        if(Auth::user()->progression->epilogue == true)
        {return '/chapters/epilogue';}
        
        elseif
        
        (Auth::user()->progression->riga == true)
         {return '/chapters/3';}
         
         elseif
         
          (Auth::user()->progression->setsail3 == true)
         {return '/chapters/2/setsail';}
         
         elseif
         
          (Auth::user()->progression->lubeckchoice == 1) 
          {
          if (Auth::user()->progression->visby == true)
            {return '/chapters/2a';}
            
            else 
            {return '/chapters/1/setsail1a';}
          }
          
            if (Auth::user()->progression->lubeckchoice == 2) 
          {
          if (Auth::user()->progression->danzig == true)
            {return '/chapters/2b';}
            
            else 
            {return  '/chapters/1/setsail1b';}
          }
       
           elseif
           (Auth::user()->progression->lubeckchoice == 0) 
           {
               if (Auth::user()->progression->lubeck == true)
               {return '/chapters/1';}
               
               elseif (Auth::user()->progression->setsail1 == true)
               {return '/chapters/prologue/setsail';}
           }
           
           else 
           {return '/chapters/prologue';}
    }
}
