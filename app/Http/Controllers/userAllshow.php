<?php

namespace App\Http\Controllers;

use App\new_accounts;
use Illuminate\Http\Request;

class userAllshow extends Controller
{
    public function index()
    {
        $user = new_accounts::all();
        return view('admin.users.existing', compact('user'));
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
