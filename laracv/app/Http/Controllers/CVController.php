<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CV;

class CVController extends Controller
{
    //
    public function show($id){
      $cvs = CV::find($id);
      return view('/show', array('cv' => $cvs));
    }
    public function list(){
      return view('/list', array('cv'=>CV::all()));
    }
}
