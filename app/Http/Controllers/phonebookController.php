<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class phonebookController extends Controller
{
 
 public function allcontact(){
  	return view('allcontact');
  }
 
 public function add(){
 	return view('add');
 }
 

  //data insert
   public function store(Request $request){

        $request->validate([
            'name'     => 'required',
            'email'     => 'required',
            'number'     => 'required',
            'city'     => 'required',
        ]);
         
   		$data = array();
   		$data['name']=$request->name;
   		$data['email']=$request->email;
   		$data['number']=$request->number;
   		$data['city']=$request->city;

		$category = DB::table('phonebook')->insert($data);
		if ($category) {
			Session::flash('success','Data successfully inserted!');
			return Redirect()->route('allcontact');
		}
		else{
			Session::flash('error','Data Not inserted!');
		}

  	
  }

  //read data

  public function Allread(){
     $category=DB::table('phonebook')->get();

    return view('allcontact',compact('category'));
      	

 
 }
    //single data view
    public function viewcategory($id){
      $category=DB::table('phonebook')->where('id',$id)->first();
      return view('viewcategory',compact('category'));
    } 

//delete data
    public function delete($id){
     	$category=DB::table('phonebook')->where('id',$id)->delete();
     if ($category) {
			Session::flash('success','Data successfully Deleted!');
			return Redirect()->route('allcontact');
		}
		else{
			Session::flash('error','Data Not Deleted!');
            return redirect()->back();
		}

  	
  	
  }

  //update
   public function update($id){

     $category=DB::table('phonebook')->where('id',$id)->first();
   return view('update',compact('category')); 
  	
  }

  //edit data
     public function Edit(Request $request,$id)
     {  
        $request->validate([
            'name'     => 'required',
            'email'     => 'required',
            'number'     => 'required',
            'city'     => 'required',
        ]);
        $data = array();
      $data['name']=$request->name;
      $data['email']=$request->email;
      $data['number']=$request->number;
      $data['city']=$request->city;
    $category = DB::table('phonebook')->where('id',$id)->update($data);
    if ($category) {
      Session::flash('success','Data successfully Updated!');
      return Redirect()->route('allcontact');
    }
    else{
      Session::flash('error','Data Not Updated!');
      return redirect()->back();
    }

 
    
  }



}
