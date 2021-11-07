<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

class BookRegController extends Controller
{
    function register(Request $req){  
    
        $data = new BookModel; 
        $data->name = $req->name;
        $data->contact = $req->contact;
        $data->email = $req->email;           
        $hash =  Hash::make($req->password);
        $data->password =  $hash;
         $data->save();
        

        // $details = array("hey"=>'dsadaAD');
        Mail::to('surendradkdev@gmail.com')->send(new SampleMail('send email'));
        return 'Email sent';
        return redirect('/login');
        
    }
}
