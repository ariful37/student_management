<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
class ClassesController extends Controller
{
    public function index(){
        $data['class'] = Classes::all();
        return view('backend.class.index',$data);
    }
}
