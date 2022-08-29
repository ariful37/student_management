<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
class GroupController extends Controller
{
    public function index(){
        $data['group'] = Group::all();
        return view('backend.group.index',$data);
    }
}
