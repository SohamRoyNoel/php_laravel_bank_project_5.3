<?php

namespace App\Http\Controllers;

use App\Http\Requests\logins_validation;
use App\new_accounts;
use Illuminate\Http\Request;

class loginOut extends Controller
{
    public function index()
    {
        return view('public.loginout.login');
    }

    public function create()
    {
        session()->forget('name');
        session()->forget('email');
        return redirect()->back();
    }

    public function store(logins_validation $request)
    {
        $email = $request->email;
        $phone = $request->password;

        // return $email . " " . $password;

         $es = new_accounts::where('email', '=', $email)->where('phone', '=', $phone)->get();

        if ($es) {
            foreach ($es as $e) {
                $name = $e['name'];
                $email = $e['email'];

                session(['name'=>$name]);
                session(['email'=>$email]);
            }
            return redirect('/');
        } else {
            return redirect('/logins');
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
