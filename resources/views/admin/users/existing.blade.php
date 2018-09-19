@extends('layouts.admin_app')

@section('content')
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2>List Of Active Users</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>Id</th>
                    <th>Phone</th>
                    <th>Aadhaar</th>
                    <th>Pan</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Close</th>
                    <th>Update</th>
                </tr>
                </thead>
                <tbody>
                @if($user)
                    @foreach($user as $u)
                        <tr>
                            <td>{{$u->id}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->aadhaar}}</td>
                            <td>{{$u->pan}}</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->sex}}</td>
                            <td>{{$u->address}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->created_at->diffForHumans()}}</td>
                            <td>{{$u->updated_at->diffForHumans()}}</td>
                            <td>
                                {!! Form::open(['method'=>'Delete']) !!}
                                {!! Form::submit('Close', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                            <td>
                                {!! Form::open(['method'=>'Delete']) !!}
                                {!! Form::submit('Edit', ['class'=>'btn btn-outline-primary']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop