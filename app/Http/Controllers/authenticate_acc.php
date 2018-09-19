<?php

namespace App\Http\Controllers;

use App\user_confirm;
use Illuminate\Http\Request;

class authenticate_acc extends Controller
{
    public function index()
    {
        $cons = user_confirm::all();
        return view('admin.users.unconfirmed', compact('cons'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
