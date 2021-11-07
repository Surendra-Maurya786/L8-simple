<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
class BookLoginController extends Controller
{
    function login(Request $req){  
        
        // $data =  BookModel::where('email',$req->input('email'))->get(); 

        // This one is working
        $data =  BookModel::where('email','=',$req->email)->first(); 

        if(!$data){
            
            return 'Wrong crendentials';
        }else{
            
            if(Hash::check($req->password, $data->password)){
                $req->session()->put('LoggedUser',$data->name);
                return redirect('/');
            }else{
                return "Wrong Password";
            }
        }

   

        // get particular  $data[0]->password
    
    //    if(   $d ){
    //     return 'Correct crendentials';
    //    }else{
    //     return 'Wrong crendentials';
    //    }
        // if($data[0]->email){
        // return $data->password ;

        // }else{
        //    
        // }
     
        // $req->session()->put('email',$data);

        // if($data){
        //   

        // }
      

     
        
        
    }

         function profile(){  

            // $datas =  BookModel::where('email','=','testdat@gmail.com'); 
            $data =  BookModel::where('name','=',session('LoggedUser'))->first(); 

            return  view('profile',['user'=>  $data ]);

        }
}
