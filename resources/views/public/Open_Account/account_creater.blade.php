@extends('layouts.app')

@section('content')

    <div class="col-md-12 w3l_contact_form">
        <center>
            <div class="col-md-12 col-sm-12 col-xs-12 w3l-bb-grid1">
                <h4>As Soon As Possible ASAP account creation form </h4>
                <h4>Lets Start!</h4>
            </div>
        </center>

        <div class="container">
            {!! Form::open(['method'=>'POST', 'action'=>'newAccount@store', 'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('phone', 'Phone number:') !!}
                    {!! Form::text('phone', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'mobile number']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('aadhaar', 'Aadhaar number:') !!}
                    {!! Form::text('aadhaar', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Aadhaar Number 12 Digit']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('pan', 'Pan number:') !!}
                    {!! Form::text('pan', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Pan Number 10 Digit']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name appeared on Aadhaar Card']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('sex', 'Gender:') !!}
                    {!! Form::select('sex', array(''=>'Select Category', '1'=>'Male', '2'=>'Female', '3'=>'Other'),  null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address', 'Address:') !!}
                    {!! Form::text('address', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Name appeared on Aadhaar Card']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'email:') !!}
                    {!! Form::email('email', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Your email']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Apply For E ASAP', ['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}

                <div class="col-md-12 col-sm-12 col-xs-12 w3l-bb-grid1">
                    <h5><font style="color: #2b542c"> **All spaces are needed, Fill it up, generate an <b>REG No</b> and verify it from any branch.....! Done.... That's all....</font></h5>
                </div>
                <br>
                @include('partial.validator')

        </div>
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@stop