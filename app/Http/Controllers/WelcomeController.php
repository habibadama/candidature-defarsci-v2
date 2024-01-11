<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;
use App\Models\Module;

class WelcomeController extends Controller
{
    public function welcome() 
    {
        $module = Module::all();
        return view('welcome',compact('module'));
    }
  

}
