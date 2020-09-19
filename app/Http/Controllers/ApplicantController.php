<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
session_start();


class ApplicantController extends Controller
{
    public function index()
    {
    	return view('applicant');
    }
    public function register()
    {
    	return view('ApplicantRegister');
    }
    public function login()
    {
    	return view('ApplicantLogin');
    }
    public function registration(Request $request)
    {
    	$data=array();
    	$data['faname']=$request->faname;
    	$data['laname']=$request->laname;
    	$data['aemail']=$request->aemail;
    	$data['apassword']=$request->apassword;
    	
    	DB::table('applicants')->insert($data);
    	toast('Your Data has been submited!','success');
    	
    	return Redirect::to('/applicant');
    }
    public function login_check(Request $request)
    {
    	$aemail=$request->aemail;
    	$apassword=$request->apassword;

    	$result=DB::table('applicants')
    		->where('aemail',$aemail)
    		->where('apassword',$apassword)
    		->first();
    		if($result){
    			//Session::put('id',$result->id);
    			return view('ApplicantProfile');

    		}
    		else{
    			return Redirect::to('/alogin');
    		}

    }
    public function upload_profile(Request $request)
    {
            $data=array();
            $data['skil']=$request->skil;
            $resume=$request->file('resume');
            $resume_name=str::random(20);
            $ext=strtolower($resume->getClientOriginalExtension());
            $resume_full_name=$resume_name.'.'.$ext;
            $upload_path='resume/';
            $resume_url=$upload_path.$resume_full_name;
            $rsuccess=$resume->move($upload_path,$resume_full_name);

           $image=$request->file('image');
            $image_name=str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            if($success && $rsuccess){
                $data['image']=$image_url;
                $data['resume']=$resume_url;
                DB::table('aprofiles')->insert($data);
                return Redirect::to('show-job');
               
            }
    }
    public function show_job()
    {
        $all_jobs=DB::table('jobdescriptions')
            ->get();
        return view('Showjoblist',compact('all_jobs'));
    }

    public function apply_job(Request $request)
    {
        $data=DB::table('aprofiles')->get();

        if($data->isEmpty())
        {
            Alert::warning('Warning Title', 'The Field Are Empty');
            return Redirect('/a-login');

        }
        else
        return Redirect('');          
    }
    public function show_applicant()
    {
        // return view('CompanyDashboard')
        // $all_applicants=DB::table('aprofiles')
        //     ->get();
        //     return response()->json($all_applicants);
    }
    public function download_file($id)
    {
        return view('welcome');
    }
}
