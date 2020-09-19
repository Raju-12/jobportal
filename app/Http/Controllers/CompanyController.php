<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
session_start();

class CompanyController extends Controller
{
    public function index()
    {
    	return view('company');
    }
    public function register()
    {
    	return view('CompanyRegister');
    }
    // public function login()
    // {
    // 	return view('CompanyLogin');
    // }
    public function job_post()
    {
        return view('JobPost');
    }
    public function dashboard()
    {
    	//return view('CompanyDashboard');
        $all_applicants=DB::table('aprofiles')
            ->get();
            return view('CompanyDashboard',compact('all_applicants'));
    }
    public function login_check(Request $request)
    {
    	$email=$request->email;
    	$password=$request->password;

    	$result=DB::table('companies')
    		->where('email',$email)
    		->where('password',$password)
    		->first();
    		if($result){
    			//Session::put('id',$result->id);
    			return Redirect::to('/c-dashboard');

    		}
    		else{
    			return Redirect::to('/login');
    		}
    }
    public function registration(Request $request)
    {
    	$data=array();
    	$data['fname']=$request->fname;
    	$data['lname']=$request->lname;
    	$data['bname']=$request->bname;
    	$data['email']=$request->email;
    	$data['password']=$request->password;
    	
    	DB::table('companies')->insert($data);
    	Alert::success('Success Title', 'Success Message');
    	
    	return Redirect::to('/company');
    }
    public function add_details(Request $request)
    {
    	$data=array();
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['salary']=$request->salary;
    	$data['country']=$request->country;
    	$data['location']=$request->location;
    	
    	DB::table('jobdescriptions')->insert($data);
    	//Alert::success('Success Title', 'Success Message');
    	
    	return Redirect::to('/c-dashboard');
    }
    public function download($aplicant)
    {
        // $downloads=DB::table('aprofiles')->get();
        // return response()->download('resume/');
        $url = resume::url($aplicant);


        $download=DB::table('aprofiles')->get();
        return Storage::download($url);
    }

}
