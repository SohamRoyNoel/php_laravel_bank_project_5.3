<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class manager_adds_admin extends Controller
{

    public function index()
    {
        return view('superAdmin.manager_to_clerk.add_admin');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $input['name']=$request->name;
        $input['email']=$request->email;
        $input['address']=$request->address;
        $input['phone_no']=$request->phone_no;
        $input['related_branch']=$request->related_branch;
        $input['one_time_pasword']=$request->one_time_pasword;
        $input['super_admin_signature_id']=session('email');

        Admin::create($input);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
