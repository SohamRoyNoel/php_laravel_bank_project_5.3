<?php

namespace App\Http\Controllers;

use App\Http\Requests\new_account_open_validator;
use App\new_accounts;
use App\user_confirm;
use Illuminate\Http\Request;

class newAccount extends Controller
{

    public function index()
    {
        return view('public.Open_Account.account_creater');
    }

    public function create()
    {
        //
    }

    public function store(new_account_open_validator $request)
    {

        $input['new_registered_user_id'] = $request->phone;
        new_accounts::create($request->all());
        user_confirm::create($input);

        $random = rand(100000, 500000);

        return view('public.Open_Account.new_account_confermation');

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
