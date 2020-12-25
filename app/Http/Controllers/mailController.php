<?php

namespace App\Http\Controllers;
use App\Models\Emails;

use Illuminate\Http\Request;

class mailController extends Controller
{
    //
        public function emailView(){
        $emails=Emails::all();

        $createdBy=Auth()->User()->name;

        return view('email.register-email' ,compact('emails'));
    }
}
