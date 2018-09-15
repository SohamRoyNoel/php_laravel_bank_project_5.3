<?php

namespace App\Http\Controllers;

use App\superAdmins;
use Illuminate\Http\Request;

class super_admin extends Controller
{
    public function index()
    {
        return view('superAdmin.super_adds_manager');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // return $request->all();

        superAdmins::create($request->all());
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
