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
                    <th>User's Phone No</th>
                    <th>isAuthenticated</th>
                    <th>byManualAdmin</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Make Authentic</th>
                </tr>
                </thead>
                <tbody>
                @if($cons)
                    @foreach($cons as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->new_registered_user_phone}}</td>
                            <td>{{$c->isAuthenticated}}</td>
                            <td>{{$c->byManualAdmin}}</td>
                            <td>{{$c->created_at}}</td>
                            <td>{{$c->updated_at}}</td>
                            <td>
                                {!! Form::open(['method'=>'Delete']) !!}
                                    {!! Form::submit('Close', ['class'=>'btn btn-warning']) !!}
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