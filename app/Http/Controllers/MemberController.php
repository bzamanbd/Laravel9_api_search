<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function search($name){
        return Member::where('name','like', '%'.$name.'%')->get();
    }
}