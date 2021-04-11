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

    public function showUpload(Request $request){
        $file=$request->file('image');
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
        echo 'File Size: '.$file->getSize();
        echo '<br>';
        echo 'File Mime Types: '.$file->getMimeType();
        $destinationPath='uploads';
        $file->move($destinationPath,$file->getClientOriginalName()); 
}
     public function in(){
        return view('la.upload_file');
     }
}