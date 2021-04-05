<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class MailController extends Controller
{
    public function send()
    {
    	$details = [
    	'title'=> 'Laura Tileubek',
    	'body'=> 'This is for testing mail using gmail'
    ];
    
        Mail::to("190103375@stu.sdu.edu.kz")->send(new DemoEmail($details));
        return "Email Sent";
 }


}
