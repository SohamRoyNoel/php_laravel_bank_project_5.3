<?php

Route::get('/', function () {
    return view('public.Public_home.home');
});


Route::resource('/public/new', 'newAccount');

Route::get('/admin', function (){
   return view('layouts.admin_app');
});

Route::resource('/super_admin', 'super_admin');