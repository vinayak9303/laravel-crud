<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class MyController extends Controller
{
    public function vinayak()
    {
        $no=12;
        return view('helloWorld', ['enroll' => $no]); 
    }   
    public function vinayak1(Request $request)
    {
        //dd($request->USERNAME);
        return view('register', ['name' => $request->NAME,'username'=> $request->USERNAME,'email'=>$request->EMAIL,'password'=>$request->PASSWORD]);
    }
    public function storedata(Request $request)
    {
        
        //dd($request->USERNAME);
        //return view('register', ['name' => $request->NAME,'username'=> $request->USERNAME,'email'=>$request->EMAIL,'password'=>$request->PASSWORD]);
        $student= new Student();
        $student->name="raj";
        $student->enroll=1111111112;
        $student->password="raj";
        $student->save();
        return "succesfully created";

    
    }
}
