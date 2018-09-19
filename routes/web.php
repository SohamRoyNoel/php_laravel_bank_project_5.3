<?php

Route::get('/', function () {
    return view('public.Public_home.home');
});


Route::resource('/public/new', 'newAccount');

Route::get('/admin', function (){
   return view('layouts.admin_app');
});

Route::resource('/super_admin', 'super_admin');

Route::resource('/user', 'userAllshow');

Route::resource('/confirm', 'authenticate_acc');

Route::resource('/logins', 'loginOut');

Route::get('/redirects', 'loginOut@index');

Route::resource('/manager_adds_admin', 'manager_adds_admin');



