<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
class SectionController extends Controller
{
    public function index(){
         $section = Section::all();
        return view('backend.section.index',compact('section'));
    }
}
