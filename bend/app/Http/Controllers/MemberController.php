<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Member;

class MemberController extends Controller
{
    
    public function index()
    {
        return view('member');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        	]);


        Member::create($request->all());

        return back()->with('success', 'Thanks its done!');
    }


}
