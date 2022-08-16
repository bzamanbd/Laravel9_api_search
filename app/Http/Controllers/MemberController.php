<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function search($name){
        $result = Member::where('name','like', '%'.$name.'%')->get();
        if (count($result)>0) {
            return $result;
        } else {
            return 'no record found';
        }

    }
}