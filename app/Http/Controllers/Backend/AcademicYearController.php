<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademicYear;
class AcademicYearController extends Controller
{
    public function index(){
        $data['year'] = AcademicYear::all();
        return view('backend.year.index',$data);
    }
}
