<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;
use File;
class ProfileController extends Controller
{
    public function index(){
    	$id = Auth::user()->id;
    	$users = User::find($id);
    	return view('backend.profile.index',compact('users'));
    }
    public function edit($id){
       $id = Auth::user()->id;
       $editData = User::find($id);
       return view('backend.profile.edit',compact('editData'));
    }

    public function update(Request $request){
       $id = Auth::user()->id;
       $editData = User::find($id);
       $editData->name = $request->name;
       $editData->email = $request->email;
       $editData->phone = $request->phone;
       $editData->address = $request->address;
       $editData->gender = $request->gender;
        //insert images also
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/userImage/' .$img);
            Image::make($image)->save($location);
            $editData->image = $img;
       
         $editData->save();
       return redirect()->route('profile.view')->with('success','Profile Update successfully');
    }

    public function passwordView(){
    	return view('backend.profile.changepass');
    }

    public function passwordUpdate(Request $request){
          if(Auth::attempt(['id' => Auth::user()->id,'password'=>$request->current_password])){
          	$id = Auth::user()->id;
    	    $users = User::find($id);
    	    $users->password = Hash::make($request->new_password);
    	    $users->save();
    	    return redirect()->route('profile.view')->with('success','Your Password Successfully Update');
          }else{
          	return redirect()->back()->with('error','Sorry! Your Current Password Does Not Match');
          }
    }
}
