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

    }

    public function store(new_account_open_validator $request)
    {
        $inp['phone']=$request->phone;
        $inp['aadhaar']=$request->aadhaar;
        $inp['pan']=$request->pan;
        $inp['name']=$request->name;
        $inp['sex']=$request->sex;
        $inp['address']=$request->address;
        $inp['account_no']=rand(100000, 100000000);
        $inp['email']=$request->email;
        $ac_no = $inp['account_no'];


        // $input['new_registered_user_phone'] = $request->phone;
        new_accounts::create($inp);
        // user_confirm::create($input);


        return view('public.Open_Account.new_account_confermation', compact($ac_no));

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
