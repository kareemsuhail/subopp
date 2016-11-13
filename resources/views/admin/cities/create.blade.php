@extends('admin.layouts.app')

@section('admin.content')
    <h3 class="page-title">Cities</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['cities.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name Of City', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name Of City']) !!}
                    <p class="help-block">Name Of City</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('country_id', 'Its state', ['class' => 'control-label']) !!}
                    {!! Form::select('country_id', $countries, old('country_id'), ['class' => 'form-control']) !!}
                    <p class="help-block">Its state</p>
                    @if($errors->has('country_id'))
                        <p class="help-block">
                            {{ $errors->first('country_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

