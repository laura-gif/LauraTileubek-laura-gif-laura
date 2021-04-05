<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lab;

class UploadFileController extends Controller
{
    public function sub(Request $request){
    	lab::create([
    	'name'=>$request->name,
    	'surname'=>$request->surname,
    	'email'=>$request->email,
    	'img'=>$request->img
    ]);
    	return back();

    }
    public function index(){
    	$la = lab::all();

    	return view('la.index')->with(['la'=>$la]);
    }

}
