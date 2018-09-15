@extends('layouts.admin_app')

@section('content')
    <div class="panel-body">
        <center><h2>Super Admin Registration by DM</h2></center>
        <div class="clearfix"> </div>

            {!! Form::open(['method'=>'POST', 'action'=>'super_admin@store', 'files'=>true, 'class'=>'form-horizontal']) !!}
            <div class="form-group">
                <label class="col-md-2 control-label">Super Admin Name</label>
                <div class="col-md-8">
                    <div class="input-group">
									<span class="input-group-addon">
										<i class="fas fa-file-signature"></i>
									</span>
                        {!! Form::text('name', null, ['class'=>'form-control1', 'placeholder'=>'Super Admin Name']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Address</label>
                <div class="col-md-8">
                    <div class="input-group">
									<span class="input-group-addon">
										<i class="fas fa-map-marked-alt"></i>
									</span>
                        {!! Form::text('email', null, ['class'=>'form-control1', 'placeholder'=>'Address']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="col-md-2 control-label">Email</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fas fa-envelope"></i>
									</span>
                        {!! Form::text('address', null, ['class'=>'form-control1', 'placeholder'=>'Email']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="col-md-2 control-label">Phone Number</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fas fa-phone-volume"></i>
									</span>
                        {!! Form::text('phone_no', null, ['class'=>'form-control1', 'placeholder'=>'Phone Number']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group has-error">
                <label class="col-md-2 control-label">Related Branch</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fas fa-code-branch"></i>
									</span>
                        {!! Form::text('related_branch', null, ['class'=>'form-control1', 'placeholder'=>'Super Admin Is Appoented to X Branch']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group has-error">
                <label class="col-md-2 control-label">Token Given By GOVERNOR</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
                        {!! Form::text('one_time_pasword', null, ['class'=>'form-control1', 'placeholder'=>'Super Admin Is Appoented to X Branch']) !!}
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        {!! Form::submit('Submit', ['class'=>'btn-success btn']) !!}
                        {!! Form::submit('Cancel', ['class'=>'btn-default btn']) !!}
                        {!! Form::submit('Reset', ['class'=>'btn-inverse btn']) !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@stop