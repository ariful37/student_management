<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
    	
    	$categorys = Category::all();
    	return view('backend.category.cat_show',compact('categorys'));
    }

    public function create(){
       return view('backend.category.cat_create');
    }


    public function store(Request $request){

    	 $this->validate($request,[
            'cat_name' => 'required|string|max:191',
          
        ]);

      try{
       $category = new Category();
       $category->cat_name = $request->cat_name;	 
       $category->save();	 
       return redirect()->route('category.view')->with('success','Data Insert successfully');
       }catch(\Exception $ex){
            
        return Redirect::route('category.create')->withError('Oh! Something is Wrong');

     }
 }
}
