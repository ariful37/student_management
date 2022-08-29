<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Image;
use File;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('backend.user.index',compact('users'));
    }

    public function create(){
      return view('backend.user.create');
    }

    public function store(Request $request){

    	 $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
             'image'  => 'nullable|image',
        ]);
          
    	    $user = new User();
            $user->usertype = $request->usertype;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('user.view')->with('success','Data Insert successfully');

    }

    public function edit($id){
    	$editData = User::find($id);
    	return view('backend.user.edit',compact('editData'));
    }
    public function update(Request $request, $id){
    	$editData = User::find($id);
    	$editData->usertype = $request->usertype;
        $editData->name = $request->name;
        $editData->email = $request->email;

        $editData->save();
        return redirect()->route('user.view')->with('success','Data Update successfully');
    }

    public function delete($id){
    	 
      $user = User::find($id); 
        if (!is_null($user)) {

        // Delete slider image
        if (File::exists('images/userImage/'.$user->image)) {
          File::delete('images/userImage/'.$user->image);
        }
        $user->delete();
      }
     
      return redirect()->route('user.view')->with('success','Data Delete successfully');

    }
}
