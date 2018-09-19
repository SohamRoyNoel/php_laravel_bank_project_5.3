@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <h1 style="font-family: 'Comic Sans MS'; color: #3b5999">Login</h1>
        <br>
    </div>

    {!! Form::open(['method'=>'POST', 'action'=>'loginOut@store', 'files'=>true]) !!}

        <div class="input-group col-sm-8 w3_w3layouts container">
            <span class="input-group-addon" id="basic-addon1"><i class="fas fa-at"></i></span>
            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
        </div>
        <div class="input-group col-sm-8 w3_w3layouts container">
            <span class="input-group-addon" id="basic-addon1"><i class="fas fa-key"></i></span>
            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password (Use Your Phone number as password)']) !!}

        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    {!! Form::submit('Login', ['class'=>'btn-success btn']) !!}
                    {{--{!! Form::submit('Cancel', ['class'=>'btn-default btn']) !!}--}}
                </div>
            </div>
        </div>

    {!! Form::close() !!}
    <div class="container">
        <a href="{{url('public/new')}}" style="font-family: Century; font-style: italic; color: #cbb956"> New User, Come lets REGISTER HERE..!</a>
    </div>
    @include('partial.validator')
@stop