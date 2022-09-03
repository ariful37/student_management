<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamName;
class ExamNameController extends Controller
{
    public function index(){
        $examName = ExamName::all();
        return view('backend.examName.index',compact('examName'));
    }
}
