<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class myController extends Controller
{

	public function laravel(){
        $name='alamin';
        $id='123221';
		return view('ownView',compact('name','id'));
	}

	public function insertForm(){
		return view('insert');
	}

	public function viewData(){

        $retriveData=DB::table('employee_tbl')->get();
		return view('viewData')->with('retriveData',$retriveData);
	}

    public function insertData(Request $request){
    	$data=array();
    	$data['name']=$request->name;
    	$data['mobile']=$request->mobile;

    	$in=DB::table('employee_tbl')->insert($data);
    	Session::put('message',' add ok');
    	return Redirect::to('/insertForm');

    }
    public function deleteData($id){
        DB::table('employee_tbl')
        ->where('id',$id)
        ->delete();
        Session::put('msg','delete successfully');
        return Redirect::to('/viewData');
    }

    public function editViewData($id){

        $editViewData=DB::table('employee_tbl')
        ->where('id',$id)
        ->first();
        return view('edit')->with('editViewData',$editViewData);
    }

     public function updateData(Request $request,$id){
        $data=array();
        $data['name']=$request->name;
        $data['mobile']=$request->mobile;

        $update=DB::table('employee_tbl')
        ->where('id',$id)
        ->update($data);
        Session::put('msg','Update successfully');
        return Redirect::to('/viewData');
    }
   
}
