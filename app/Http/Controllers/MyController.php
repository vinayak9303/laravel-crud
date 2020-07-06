<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Student;
class MyController extends Controller
{
    public function insert()
    {
        return view('helloWorld'); 
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
        $student->name= $request->name;
        $student->enroll= $request->enroll;
        $student->password=$request->password;
        $student->save();
        
        

    }
     public function showdata()
    {
        $data['data']=DB::table('students')->get();
        if(count($data)>0)
        {
            return view('show',$data);
        }
}
public function edit()
{
    return "success";
}
public function delete()
{
    return "deleted";
}
}