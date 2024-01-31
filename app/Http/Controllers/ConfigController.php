<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
   public function switch_mode(){
    $User=User::find(Auth::user()->id);
    if($User->dark_mode==1){
        $User->dark_mode=0;
    }else{
        $User->dark_mode=1;
    }
    $User->save();
    return Redirect::back();
   }
  
}
